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

use YC\RPC\RpcService\Call\Bean\CallRecordReqBean;
use YC\RPC\RpcService\Call\Bean\CallRecordResBean;

interface CallServiceInterface
{
    public function getCallSummary(array $params);

    public function getCallRecordList(array $params);

    public function getRecordDetailByUuId(string $uuid): array;

    public function createRecord(CallRecordReqBean $recordBean): CallRecordResBean;
}