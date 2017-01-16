<?php
/**
 * WizWangEditorExtension.php
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
namespace Wiz\WangEditorBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Class WizWangEditorExtension
 * @package Wiz\WangEditorBundle\DependencyInjection
 */
class WizWangEditorExtension extends ConfigurableExtension
{
    /**
     * {@inheritdoc}
     */
    protected function loadInternal(array $config, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yml');

        // Symfony3以下版本需要alias
        if (Kernel::VERSION_ID < 30000) {
            $container
                ->getDefinition('wiz_wang_editor.form.type')
                ->clearTag('form.type')
                ->addTag('form.type', ['alias' => 'wang_editor']);
        }

        dump($config);
        exit();
    }
}