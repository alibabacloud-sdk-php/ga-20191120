<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\orderDetails;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\promotions;
use AlibabaCloud\SDK\Ga\V20191120\Models\DescribeCommodityPriceResponseBody\ruleDetails;
use AlibabaCloud\Tea\Model;

class DescribeCommodityPriceResponseBody extends Model
{
    /**
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @example 419.8
     *
     * @var float
     */
    public $discountPrice;

    /**
     * @var orderDetails[]
     */
    public $orderDetails;

    /**
     * @example 2099
     *
     * @var float
     */
    public $originalPrice;

    /**
     * @var promotions[]
     */
    public $promotions;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @var ruleDetails[]
     */
    public $ruleDetails;

    /**
     * @example 1679.2
     *
     * @var float
     */
    public $tradePrice;
    protected $_name = [
        'currency'      => 'Currency',
        'discountPrice' => 'DiscountPrice',
        'orderDetails'  => 'OrderDetails',
        'originalPrice' => 'OriginalPrice',
        'promotions'    => 'Promotions',
        'requestId'     => 'RequestId',
        'ruleDetails'   => 'RuleDetails',
        'tradePrice'    => 'TradePrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->orderDetails) {
            $res['OrderDetails'] = [];
            if (null !== $this->orderDetails && \is_array($this->orderDetails)) {
                $n = 0;
                foreach ($this->orderDetails as $item) {
                    $res['OrderDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->promotions) {
            $res['Promotions'] = [];
            if (null !== $this->promotions && \is_array($this->promotions)) {
                $n = 0;
                foreach ($this->promotions as $item) {
                    $res['Promotions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleDetails) {
            $res['RuleDetails'] = [];
            if (null !== $this->ruleDetails && \is_array($this->ruleDetails)) {
                $n = 0;
                foreach ($this->ruleDetails as $item) {
                    $res['RuleDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommodityPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['OrderDetails'])) {
            if (!empty($map['OrderDetails'])) {
                $model->orderDetails = [];
                $n                   = 0;
                foreach ($map['OrderDetails'] as $item) {
                    $model->orderDetails[$n++] = null !== $item ? orderDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['Promotions'])) {
            if (!empty($map['Promotions'])) {
                $model->promotions = [];
                $n                 = 0;
                foreach ($map['Promotions'] as $item) {
                    $model->promotions[$n++] = null !== $item ? promotions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RuleDetails'])) {
            if (!empty($map['RuleDetails'])) {
                $model->ruleDetails = [];
                $n                  = 0;
                foreach ($map['RuleDetails'] as $item) {
                    $model->ruleDetails[$n++] = null !== $item ? ruleDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }

        return $model;
    }
}
