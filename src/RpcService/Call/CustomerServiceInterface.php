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

interface CustomerServiceInterface
{
    /**
     * 通过文件导入客户
     * @param array $data
     * @return array
     */
    public function importByFile(array $data): array;

    /**
     * 通过json导入客户
     * @param array $data
     * @return array
     */
    public function importByJson(array $data): array;

}
