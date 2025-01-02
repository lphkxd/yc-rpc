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
use YC\Core\Bean\SplBean;

class CallRecordResBean extends SplBean
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
    protected string $uuid = '';

    /**
     * @var string 呼叫电话号码
     */
    protected string $number = '';

    /**
     * @var int 呼叫状态
     */
    protected int $state = 0;

    /**
     * @var Carbon 呼叫时间
     */
    protected Carbon $call_time;

    /**
     * @var Carbon 电话接通时间
     */
    protected Carbon $answer_time;

    /**
     * @var Carbon 电话挂机时间
     */
    protected Carbon $hangup_time;

    /**
     * @var int 通话时长(秒)
     */
    protected int $bill = 0;

    /**
     * @var string 整段录音文件地址
     */
    protected string $record_file = '';

    /**
     * @var string 挂断原因
     */
    protected string $hangup_cause = '';

    /**
     * @var int 交互次数
     */
    protected int $rounds = 0;

    /**
     * @var int 1-机器人先挂机，2-对方先挂机
     */
    protected int $hangup_disposition = 0;

    /**
     * @var array 标签
     */
    protected array $tag_ids = [];

    public function __construct(?array $data = null, $autoCreateProperty = true)
    {
        // 设置默认时间
        $this->call_time = new Carbon();
        $this->answer_time = new Carbon();
        $this->hangup_time = new Carbon();

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
    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getNumber(): string
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

    public function getHangupCause(): string
    {
        return $this->hangup_cause;
    }

    public function getHangupDisposition(): int
    {
        return $this->hangup_disposition;
    }

    /**
     * 属性映射关系.
     */
    protected function setClassMapping(): array
    {
        return [
            'call_time' => '@' . Carbon::class,
            'answer_time' => '@' . Carbon::class,
            'hangup_time' => '@' . Carbon::class,
        ];
    }
}
