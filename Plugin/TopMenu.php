<?php

declare(strict_types=1);

namespace Trenzalore\Ofex\Plugin;

use Magento\Framework\UrlInterface;
use Magento\Theme\Block\Html\Topmenu as TopMenuCore;
use Magento\Framework\Data\Tree\NodeFactory;

class TopMenu
{
    /**
     * A variable that is used to store the NodeFactory.
     * 
     * @var NodeFactory
     */
    protected $nodeFactory;

    /**
     * A variable that is used to store the URL interface. 
     * 
     * @var UrlInterface
     */
    protected $urlInterface;

    /**  
     * A constant that is used to create the URL for the menu item. 
     * 
     * @var const string
     */
    const URI = 'ofex/offers';

    /**
     * This function is called when the class is instantiated. It takes two parameters, a NodeFactory and
     * a UrlInterface. It then assigns the parameters to the class variables
     * 
     * @param NodeFactory nodeFactory This is the factory class that will be used to create the node.
     * @param UrlInterface urlInterface This is the Magento\Framework\UrlInterface class. This class is
     * used to generate URLs.
     */
    public function __construct(NodeFactory $nodeFactory, UrlInterface $urlInterface)
    {
        $this->nodeFactory = $nodeFactory;
        $this->urlInterface = $urlInterface;
    }

    /**
     * We're creating a new menu item, and adding it to the menu
     * 
     * @param TopMenuCore subject The class that is calling the plugin.
     * @param outermostClass The class that is applied to the outermost list element in the top menu.
     * @param childrenWrapClass The class name of the ul element that wraps the children of the menu item.
     * @param limit The maximum number of menu items to display.
     */
    public function beforeGetHtml(
        TopMenuCore $subject,
        $outermostClass = '',
        $childrenWrapClass = '',
        $limit = 0
    ) {
        $url = $this->urlInterface->getUrl(self::URI);
        $menuNode = $this->nodeFactory->create([
            'data' => [
                'name' => __('Offers'),
                'id' => 'ofex',
                'url' => $url,
                'has_active' => false,
                'is_active' => false,
            ],
            'idField' => 'ofex',
            'tree' => $subject->getMenu()->getTree(),
        ]);

        $subject->getMenu()->addChild($menuNode);
    }
}
