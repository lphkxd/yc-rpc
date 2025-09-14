<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace YC\RPC\RpcService\Call;

interface LineAllocationServiceInterface
{
    /**
     * 新增或更新一条外部分配线路（幂等键：external_allocation_id）。
     *
     * @param array $payload
     * @return array{success:bool, external_allocation_id:int, line_id:int, billing_item_attribute_id:int|null, message:string}
     */
    public function upsertAllocation(array $payload): array;

    /**
     * 批量 upsert 外部分配线路。
     * @param array $payloadList
     * @return array{list:array<int, array{success:bool, external_allocation_id:int, line_id?:int, message:string}>}
     */
    public function batchUpsertAllocations(array $payloadList): array;

    /**
     * 按外部分配ID更新字段（部分字段更新）。
     * @param int $corpId
     * @param int $externalAllocationId
     * @param array $payload
     */
    public function updateAllocation(int $corpId, int $externalAllocationId, array $payload): array;

    /**
     * 删除（软删）并同步删除 FS 配置。
     */
    public function deleteByExternalAllocationId(int $corpId, int $externalAllocationId): array;

    /**
     * 启用。
     */
    public function enableByExternalAllocationId(int $corpId, int $externalAllocationId): array;

    /**
     * 禁用。
     */
    public function disableByExternalAllocationId(int $corpId, int $externalAllocationId): array;

    /**
     * 详情。
     */
    public function infoByExternalAllocationId(int $corpId, int $externalAllocationId): array;

    /**
     * 列表查询。
     * @param array $params { corp_id:int, state?:int, name?:string, server_enable_type?:int, created_at?:[string,string], page?:int, limit?:int }
     * @return array 分页数据或列表数据（由服务端按项目规范返回）
     */
    public function listByCorp(array $params = []): array;
}


