<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\MerchantAgentGui\Communication\Expander;

use Symfony\Component\Form\FormBuilderInterface;

interface MerchantAgentUserFormExpanderInterface
{
    /**
     * @param \Symfony\Component\Form\FormBuilderInterface<string, \Symfony\Component\Form\FormBuilderInterface> $builder
     *
     * @return void
     */
    public function expandForm(FormBuilderInterface $builder): void;
}
