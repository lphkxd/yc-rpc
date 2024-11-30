<?php

namespace YC\RPC\RpcService\Call;

interface CallServiceInterface
{
    public function getCallSummary(array $params);

    public function getCallRecordList(array $params);

    public function getRecordDetailByUuId(string $uuid): array;
}