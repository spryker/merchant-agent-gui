<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantAgentGui\Communication\Expander;

use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

interface MerchantAgentUserTableConfigExpanderInterface
{
    public function expandConfig(TableConfiguration $config): TableConfiguration;
}
