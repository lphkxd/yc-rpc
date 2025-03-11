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

namespace YC\RPC\Bean\Call;

use Carbon\Carbon;
use YC\RPC\Bean\SplBean;

class CallRecordReqBean extends SplBean
{
    /**
     * @var int 公司ID
     */
    protected int $corp_id = 0;

    /**
     * @var int 公司ID
     */
    protected int $employee_id = 0;

    /**
     * @var int 公司ID
     */
    protected int $department_id = 0;

    protected int $customer_id = 0;

    /**
     * @var string 通话唯一标识
     */
    protected ?string $uuid = '';

    /**
     * @var ?string 呼叫电话号码
     */
    protected ?string $number = '';

    /**
     * @var ?string 呼叫电话号码
     */
    protected ?string $remark = '';

    /**
     * @var int 呼叫类型：1-人工，2-AI
     */
    protected int $call_type = 1;

    /**
     * @var int 呼叫状态
     */
    protected int $state = 0;

    /**
     * @var ?Carbon 呼叫时间
     */
    protected ?string $call_time;

    /**
     * @var ?Carbon 电话接通时间
     */
    protected ?Carbon $answer_time;

    /**
     * @var Carbon 电话挂机时间
     */
    protected Carbon $hangup_time;

    /**
     * @var int 通话时长(秒)
     */
    protected int $bill = 0;

    /**
     * @var ?string 整段录音文件地址
     */
    protected ?string $record_file = '';

    /**
     * @var ?string 挂断原因
     */
    protected ?string $hangup_cause = '';


    public function __construct(?array $data = null, $autoCreateProperty = true)
    {
        // 设置默认时间
        $this->call_time = (new Carbon())->format('Y-m-d H:i:s');

        parent::__construct($data, $autoCreateProperty);
    }

    public function getEmployeeId(): int
    {
        return $this->employee_id;
    }

    public function setEmployeeId(int $employee_id): void
    {
        $this->employee_id = $employee_id;
    }

    public function getDepartmentId(): int
    {
        return $this->department_id;
    }

    public function setDepartmentId(int $department_id): void
    {
        $this->department_id = $department_id;
    }

    public function getCustomerId(): int
    {
        return $this->customer_id;
    }

    public function setCustomerId(int $customer_id): void
    {
        $this->customer_id = $customer_id;
    }

    // 只保留关键属性的getter
    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function getCallTime(): Carbon
    {
        return $this->call_time;
    }

    public function getAnswerTime(): Carbon
    {
        return $this->answer_time;
    }

    public function getHangupTime(): Carbon
    {
        return $this->hangup_time;
    }

    public function getBill(): int
    {
        return $this->bill;
    }

    public function getRecordFile(): ?string
    {
        return $this->record_file;
    }

    public function setRecordFile(?string $record_file): void
    {
        $this->record_file = $record_file;
    }

    public function getCorpId(): int
    {
        return $this->corp_id;
    }

    public function setCorpId(int $corp_id): void
    {
        $this->corp_id = $corp_id;
    }

    public function setUuid(?string $uuid): void
    {
        $this->uuid = $uuid;
    }

    public function setNumber(?string $number): void
    {
        $this->number = $number;
    }

    public function getState(): int
    {
        return $this->state;
    }

    public function setState(int $state): void
    {
        $this->state = $state;
    }

    public function setAnswerTime(?Carbon $answer_time): void
    {
        $this->answer_time = $answer_time;
    }

    public function setHangupTime(Carbon $hangup_time): void
    {
        $this->hangup_time = $hangup_time;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
    }

    public function setCallType(int $call_type)
    {
        $this->call_type = $call_type;
    }
}
