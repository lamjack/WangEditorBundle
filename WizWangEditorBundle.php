<?php
/**
 * WizWangEditorBundle.php
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    jack <linjue@wilead.com>
 * @copyright 2007-2017/1/16 WIZ TECHNOLOGY
 * @link      https://wizmacau.com
 * @link      https://lamjack.github.io
 * @link      https://github.com/lamjack
 * @version
 */
namespace Wiz\WangEditorBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Wiz\WangEditorBundle\DependencyInjection\Compiler\ResourceCompilerPass;

/**
 * Class WizWangEditorBundle
 * @package Wiz\WangEditorBundle
 */
class WizWangEditorBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container
            ->addCompilerPass(new ResourceCompilerPass());
    }
}