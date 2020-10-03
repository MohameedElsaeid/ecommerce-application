<?php


namespace App\Repositories;


use App\Product;
use App\ProductImage;
use App\ProductSpecification;
use Illuminate\Support\Facades\DB;

/**
 * Class ProductRepository
 * @package App\Repositories
 */
class ProductRepository extends BaseRepository implements IProductRepository
{
    /**
     * @var IProductImageRepository
     */
    private $productImageRepository;
    /**
     * @var IProductSpecificationRepository
     */
    private $productSpecificationRepository;

    /**
     * BrandRepository constructor.
     * @param Product                         $product
     * @param                                 $productImageRepository
     * @param IProductSpecificationRepository $productSpecificationRepository
     */
    public function __construct(
        Product $product,
        IProductImageRepository $productImageRepository,
        IProductSpecificationRepository $productSpecificationRepository
    )
    {
        $this->model = $product;
        $this->productImageRepository = $productImageRepository;
        $this->productSpecificationRepository = $productSpecificationRepository;
    }

    /**
     * @param $request
     * @return bool|\Illuminate\Http\RedirectResponse
     */
    public function createProduct($request)
    {
        try {
            DB::beginTransaction();
            $product = $this->insertProduct($request->all());
            $this->productImageRepository->insertProductImages($request, $product->product_id);
            $this->productSpecificationRepository->createProductSpecification($request->all());
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return back()->with('error', 'invalid data');
        }

        return true;
    }

    private function insertProduct($data)
    {
        $productData = $this->prepareProductData($data);
        return $this->create($productData);
    }

    /**
     * @param array $data
     * @return array
     */
    private function prepareProductData(array $data): array
    {
        return [
            'title' => $data['title'],
            'price' => $data['price'],
            'category_id' => $data['category_id'],
            'brand_id' => $data['brand_id'],
            'available_count' => $data['available_count'],
            'brief' => $data['brief'],
            'description' => $data['description'],
            'is_awesome' => isset($data['is_awesome']) ? 1 : 0,
        ];
    }
}
