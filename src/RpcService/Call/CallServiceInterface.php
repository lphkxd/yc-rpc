<?php

namespace YC\RPC\RpcService\Call;

interface CallServiceInterface
{
    public function getCallSummary($params);

    public function getCallRecordList($params);
}