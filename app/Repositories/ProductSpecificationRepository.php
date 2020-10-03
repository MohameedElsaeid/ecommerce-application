<?php


namespace App\Repositories;


use App\ProductSpecification;

class ProductSpecificationRepository extends BaseRepository implements IProductSpecificationRepository
{
    public function __construct(ProductSpecification $model)
    {
        $this->model = $model;
    }

    public function createProductSpecification($data, $productId)
    {
        $specification = $this->prepareProductSpecificationData($data, $productId);
        $this->create($specification);
    }

    private function prepareProductSpecificationData(array $data, $productId): array
    {
        return [
            'product_id' => $productId,
            'width' => $data['width'],
            'height' => $data['height'],
            'depth' => $data['depth'],
            'weight' => $data['weight'],
            'quality_checking' => isset($data['quality_checking']) ? 1 : 0,
            'freshness_Duration' => $data['freshness_duration'],
            'when_packeting' => $data['when_packeting'],
            'each_box_contains' => $data['each_box_contains']
        ];
    }


}
