<?php

namespace common\modules\admin;

/**
 * AdminAsset
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class AdminAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@common/modules/admin/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'yii.admin.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}
