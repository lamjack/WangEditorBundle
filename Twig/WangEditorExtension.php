<?php
/**
 * WangEditorExtension.php
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
namespace Wiz\WangEditorBundle\Twig;

use Wiz\WangEditorBundle\Renderer\WangEditorRenderer;
use Wiz\WangEditorBundle\Renderer\WangEditorRendererInterface;

class WangEditorExtension extends \Twig_Extension implements WangEditorRendererInterface
{
    /**
     * @var WangEditorRenderer
     */
    private $renderer;

    /**
     * WangEditorExtension constructor.
     * @param WangEditorRenderer $renderer
     */
    public function __construct(WangEditorRenderer $renderer)
    {
        $this->renderer = $renderer;
    }
}