<?php
namespace {
    die('Intended for use with IDE symbol matching only.');
//Generated on February 07, 2015 at 12:09:40 pm

    class Area extends \Concrete\Core\Area\Area
    {

        /** @var \Concrete\Core\Area\Area */
        protected static $instance;

        public function setAreaDisplayName($arDisplayName)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setAreaDisplayName($arDisplayName);
        }

        /**
        * Returns whether or not controls are to be displayed
        * @return bool
        */
        public function showControls()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->showControls();
        }

        public function forceControlsToDisplay()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->forceControlsToDisplay();
        }

        public function setAreaGridMaximumColumns($cspan)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setAreaGridMaximumColumns($cspan);
        }

        public function getAreaGridMaximumColumns()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaGridMaximumColumns();
        }

        final public function enableGridContainer()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->enableGridContainer();
        }

        public function isGridContainerEnabled()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->isGridContainerEnabled();
        }

        public function getAreaDisplayName()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaDisplayName();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        /**
        * returns the Collection's cID
        * @return int
        */
        public function getCollectionID()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getCollectionID();
        }

        /**
        * returns the Collection object for the current Area
        * @return Collection
        */
        public function getAreaCollectionObject()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaCollectionObject();
        }

        /**
        * whether or not it's a global area
        * @return bool
        */
        public function isGlobalArea()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->isGlobalArea();
        }

        /**
        * returns the arID of the current area
        * @return int
        */
        public function getAreaID()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaID();
        }

        /**
        * returns the handle for the current area
        * @return string
        */
        public function getAreaHandle()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaHandle();
        }

        /**
        * Returns the total number of blocks in an area.
        * @param Page $c must be passed if the display() method has not been run on the area object yet.
        */
        public function getTotalBlocksInArea($c = false)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getTotalBlocksInArea($c);
        }

        /**
        * Returns the amount of actual blocks in the area, does not exclude core blocks or layouts, does not recurse.
        */
        public function getTotalBlocksInAreaEditMode()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getTotalBlocksInAreaEditMode();
        }

        /**
        * check if the area has permissions that override the page's permissions
        * @return boolean
        */
        public function overrideCollectionPermissions()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->overrideCollectionPermissions();
        }

        /**
        * @return int
        */
        public function getAreaCollectionInheritID()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaCollectionInheritID();
        }

        /**
        * Sets the total number of blocks an area allows. Does not limit by type.
        * @param int $num
        * @return void
        */
        public function setBlockLimit($num)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setBlockLimit($num);
        }

        /**
        * disables controls for the current area
        * @return void
        */
        public function disableControls()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->disableControls();
        }

        /**
        * gets the maximum allowed number of blocks, -1 if unlimited
        * @return int
        */
        public function getMaximumBlocks()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getMaximumBlocks();
        }

        /**
        *
        * @return string
        */
        public function getAreaUpdateAction($task = "update", $alternateHandler = null)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaUpdateAction($task, $alternateHandler);
        }

        public function refreshCache($c)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->refreshCache($c);
        }

        /**
        * Gets the Area object for the given page and area handle
        * @param Page|Collection $c
        * @param string $arHandle
        * @param int|null $arIsGlobal
        * @return Area
        */
        final public static function get(&$c, $arHandle)
        {
            return Concrete\Core\Area\Area::get($c, $arHandle);
        }

        /**
        * Creates an area in the database. I would like to make this static but PHP pre 5.3 sucks at this stuff.
        */
        public function create($c, $arHandle)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->create($c, $arHandle);
        }

        public static function getAreaHandleFromID($arID)
        {
            return Concrete\Core\Area\Area::getAreaHandleFromID($arID);
        }

        /**
        * Get all of the blocks within the current area for a given page
        * @param Page|Collection $c
        * @return Block[]
        */
        public function getAreaBlocksArray($c = false)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaBlocksArray($c);
        }

        /**
        * gets a list of all areas - no relation to the current page or area object
        * possibly could be set as a static method??
        * @return array
        */
        public function getHandleList()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getHandleList();
        }

        public function getListOnPage(Concrete\Core\Page\Page $c)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getListOnPage($c);
        }

        /**
        * This function removes all permissions records for the current Area
        * and sets it to inherit from the Page permissions
        * @return void
        */
        public function revertToPagePermissions()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->revertToPagePermissions();
        }

        /**
        * Rescans the current Area's permissions ensuring that it's enheriting permissions properly up the chain
        * @return void
        */
        public function rescanAreaPermissionsChain()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->rescanAreaPermissionsChain();
        }

        /**
        * works a lot like rescanAreaPermissionsChain() but it works down. This is typically only
        * called when we update an area to have specific permissions, and all areas that are on pagesbelow it with the same
        * handle, etc... should now inherit from it.
        * @return void
        */
        public function rescanSubAreaPermissions($cIDToCheck = null)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->rescanSubAreaPermissions($cIDToCheck);
        }

        /**
        * similar to rescanSubAreaPermissions, but for those who have setup their pages to inherit master collection permissions
        * @see Area::rescanSubAreaPermissions()
        * @return void
        */
        public function rescanSubAreaPermissionsMasterCollection($masterCollection)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->rescanSubAreaPermissionsMasterCollection($masterCollection);
        }

        public static function getOrCreate($c, $arHandle)
        {
            return Concrete\Core\Area\Area::getOrCreate($c, $arHandle);
        }

        public function load($c)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->load($c);
        }

        protected function getAreaBlocks()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaBlocks();
        }

        /**
        * displays the Area in the page
        * ex: $a = new Area('Main'); $a->display($c);
        * @param Page|Collection $c
        * @param Block[] $alternateBlockArray optional array of blocks to render instead of default behavior
        * @return void
        */
        public function display($c, $alternateBlockArray = null)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->display($c, $alternateBlockArray);
        }

        /**
        * Exports the area to content format
        * @todo need more documentation export?
        */
        public function export($p, $page)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->export($p, $page);
        }

        /**
        * Specify HTML to automatically print before blocks contained within the area
        * @param string $html
        * @return void
        */
        public function setBlockWrapperStart($html)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setBlockWrapperStart($html);
        }

        /**
        * Set HTML that automatically prints after any blocks contained within the area
        * @param string $html
        * @return void
        */
        public function setBlockWrapperEnd($html)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setBlockWrapperEnd($html);
        }

        public function overridePagePermissions()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->overridePagePermissions();
        }

        /**
        * @deprecated
        * This no longer functions. This functionality is now located at the theme level.
        * sets a custom block template for blocks of a type specified by the btHandle
        * @param string $btHandle handle for the block type
        * @param string $view string identifying the block template ex: 'templates/breadcrumb.php'
        */
        public function setCustomTemplate($btHandle, $view)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setCustomTemplate($btHandle, $view);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class Asset extends \Concrete\Core\Asset\Asset
    {

        /** @var \Concrete\Core\Asset\Asset */
        protected static $instance;

        public function assetSupportsMinification()
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->assetSupportsMinification();
        }

        public function assetSupportsCombination()
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->assetSupportsCombination();
        }

        public function setAssetSupportsMinification($minify)
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->setAssetSupportsMinification($minify);
        }

        public function setAssetSupportsCombination($combine)
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->setAssetSupportsCombination($combine);
        }

        public function getAssetURL()
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->getAssetURL();
        }

        public function getAssetPath()
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->getAssetPath();
        }

        public function getAssetHandle()
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->getAssetHandle();
        }

        public function getAssetFilename()
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->getAssetFilename();
        }

        public function setAssetVersion($version)
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->setAssetVersion($version);
        }

        public function setCombinedAssetSourceFiles($paths)
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->setCombinedAssetSourceFiles($paths);
        }

        public function getAssetVersion()
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->getAssetVersion();
        }

        public function setAssetPosition($position)
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->setAssetPosition($position);
        }

        public function setPackageObject($pkg)
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->setPackageObject($pkg);
        }

        public function setAssetURL($url)
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->setAssetURL($url);
        }

        public function setAssetPath($path)
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->setAssetPath($path);
        }

        public function getAssetURLPath()
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->getAssetURLPath();
        }

        public function isAssetLocal()
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->isAssetLocal();
        }

        public function setAssetIsLocal($isLocal)
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->setAssetIsLocal($isLocal);
        }

        public function getAssetPosition()
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->getAssetPosition();
        }

        public function mapAssetLocation($path)
        {
            /** @var Concrete\Core\Asset\Asset $instance */
            return $instance->mapAssetLocation($path);
        }

    }

    class AssetList extends \Concrete\Core\Asset\AssetList
    {

        /** @var \Concrete\Core\Asset\AssetList */
        protected static $instance;

        public function getRegisteredAssets()
        {
            /** @var Concrete\Core\Asset\AssetList $instance */
            return $instance->getRegisteredAssets();
        }

        public static function getInstance()
        {
            return Concrete\Core\Asset\AssetList::getInstance();
        }

        public function register($assetType, $assetHandle, $filename, $args = array(), $pkg = false)
        {
            /** @var Concrete\Core\Asset\AssetList $instance */
            return $instance->register($assetType, $assetHandle, $filename, $args, $pkg);
        }

        public function registerMultiple(array $assets)
        {
            /** @var Concrete\Core\Asset\AssetList $instance */
            return $instance->registerMultiple($assets);
        }

        public function registerAsset(Concrete\Core\Asset\Asset $asset)
        {
            /** @var Concrete\Core\Asset\AssetList $instance */
            return $instance->registerAsset($asset);
        }

        public function registerGroup($assetGroupHandle, $assetHandles, $customClass = false)
        {
            /** @var Concrete\Core\Asset\AssetList $instance */
            return $instance->registerGroup($assetGroupHandle, $assetHandles, $customClass);
        }

        public function registerGroupMultiple(array $asset_groups)
        {
            /** @var Concrete\Core\Asset\AssetList $instance */
            return $instance->registerGroupMultiple($asset_groups);
        }

        public function getAsset($assetType, $assetHandle)
        {
            /** @var Concrete\Core\Asset\AssetList $instance */
            return $instance->getAsset($assetType, $assetHandle);
        }

        /**
        * @param string $assetGroupHandle
        * @return \Concrete\Core\Asset\AssetGroup
        */
        public function getAssetGroup($assetGroupHandle)
        {
            /** @var Concrete\Core\Asset\AssetList $instance */
            return $instance->getAssetGroup($assetGroupHandle);
        }

    }

    class AttributeSet extends \Concrete\Core\Attribute\Set
    {

        /** @var \Concrete\Core\Attribute\Set */
        protected static $instance;

        public static function getByID($asID)
        {
            return Concrete\Core\Attribute\Set::getByID($asID);
        }

        public static function getByHandle($asHandle)
        {
            return Concrete\Core\Attribute\Set::getByHandle($asHandle);
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Attribute\Set::getListByPackage($pkg);
        }

        public function getAttributeSetID()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->getAttributeSetID();
        }

        public function getAttributeSetHandle()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->getAttributeSetHandle();
        }

        public function getAttributeSetName()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->getAttributeSetName();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->getPackageHandle();
        }

        public function getAttributeSetKeyCategoryID()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->getAttributeSetKeyCategoryID();
        }

        public function isAttributeSetLocked()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->isAttributeSetLocked();
        }

        /** Returns the display name for this attribute set (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *	Escape the result in html format (if $format is 'html').
        *	If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getAttributeSetDisplayName($format = "html")
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->getAttributeSetDisplayName($format);
        }

        public function updateAttributeSetName($asName)
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->updateAttributeSetName($asName);
        }

        public function updateAttributeSetHandle($asHandle)
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->updateAttributeSetHandle($asHandle);
        }

        public function addKey($ak)
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->addKey($ak);
        }

        public function clearAttributeKeys()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->clearAttributeKeys();
        }

        public function export($axml)
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->export($axml);
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Attribute\Set::exportList($xml);
        }

        public function getAttributeKeys()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->getAttributeKeys();
        }

        public function contains($ak)
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->contains($ak);
        }

        /**
        * Removes an attribute set and sets all keys within to have a set ID of 0.
        */
        public function delete()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->delete();
        }

        public function deleteKey($ak)
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->deleteKey($ak);
        }

        protected function rescanDisplayOrder()
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->rescanDisplayOrder();
        }

        public function updateAttributesDisplayOrder($uats)
        {
            /** @var Concrete\Core\Attribute\Set $instance */
            return $instance->updateAttributesDisplayOrder($uats);
        }

        public static function exportTranslations()
        {
            return Concrete\Core\Attribute\Set::exportTranslations();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class AuthenticationType extends \Concrete\Core\Authentication\AuthenticationType
    {

        /** @var \Concrete\Core\Authentication\AuthenticationType */
        protected static $instance;

        public static function getListSorted()
        {
            return Concrete\Core\Authentication\AuthenticationType::getListSorted();
        }

        /**
        * Return a raw list of authentication types
        * @param bool $sorted true: Sort by display order, false: sort by install order
        * @param bool $activeOnly true: include only active types, false: include active and inactive types
        * @return AuthenticationType[]
        */
        public static function getList($sorted = false, $activeOnly = false)
        {
            return Concrete\Core\Authentication\AuthenticationType::getList($sorted, $activeOnly);
        }

        /**
        * Load an AuthenticationType from an array.
        * @param array $arr should be an array of the following key/value pairs to create an object from:
        * <pre>
        * array(
        *     'authTypeID' => int,
        *     'authTypeHandle' => string,
        *     'authTypeName' => string,
        *     'authTypeDisplayOrder' => int,
        *     'authTypeIsEnabled' => tinyint,
        *     'pkgID' => int
        * )
        * </pre>
        * @return bool|\Concrete\Core\Authentication\AuthenticationType
        */
        public static function load($arr)
        {
            return Concrete\Core\Authentication\AuthenticationType::load($arr);
        }

        /**
        * Load the AuthenticationTypeController into the AuthenticationType
        */
        protected function loadController()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->loadController();
        }

        /**
        * AuthenticationType::getPackageHandle
        * Return the package handle.
        */
        public function getPackageHandle()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->getPackageHandle();
        }

        /**
        * Return an array of AuthenticationTypes that are associated with a specific package.
        * @param Package $pkg
        * @return AuthenticationType[]
        */
        public static function getListByPackage(Concrete\Core\Package\Package $pkg)
        {
            return Concrete\Core\Authentication\AuthenticationType::getListByPackage($pkg);
        }

        /**
        * @param string $atHandle New AuthenticationType handle
        * @param string $atName New AuthenticationType name, expect this to be presented with "%s Authentication Type"
        * @param int $order Order int, used to order the display of AuthenticationTypes
        * @param bool|\Package $pkg Package object to which this AuthenticationType is associated.
        * @throws \Exception
        * @return AuthenticationType Returns a loaded authentication type.
        */
        public static function add($atHandle, $atName, $order = 0, $pkg = false)
        {
            return Concrete\Core\Authentication\AuthenticationType::add($atHandle, $atName, $order, $pkg);
        }

        /**
        * Return loaded AuthenticationType with the given handle.
        * @param string $atHandle AuthenticationType handle.
        * @throws \Exception when an invalid handle is provided
        * @return AuthenticationType
        */
        public static function getByHandle($atHandle)
        {
            return Concrete\Core\Authentication\AuthenticationType::getByHandle($atHandle);
        }

        /**
        * Return loaded AuthenticationType with the given ID.
        * @param int $authTypeID
        * @throws \Exception
        * @return AuthenticationType
        */
        public static function getByID($authTypeID)
        {
            return Concrete\Core\Authentication\AuthenticationType::getByID($authTypeID);
        }

        public function getAuthenticationTypeName()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->getAuthenticationTypeName();
        }

        public function getAuthenticationTypeDisplayOrder()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->getAuthenticationTypeDisplayOrder();
        }

        public function getAuthenticationTypePackageID()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->getAuthenticationTypePackageID();
        }

        public function getController()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->getController();
        }

        public function getAuthenticationTypeIconHTML()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->getAuthenticationTypeIconHTML();
        }

        /**
        * Update the name
        * @param string $authTypeName
        */
        public function setAuthenticationTypeName($authTypeName)
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->setAuthenticationTypeName($authTypeName);
        }

        /**
        * AuthenticationType::setAuthenticationTypeDisplayOrder
        * Update the order for display.
        *
        * @param int $order value from 0-n to signify order.
        */
        public function setAuthenticationTypeDisplayOrder($order)
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->setAuthenticationTypeDisplayOrder($order);
        }

        public function getAuthenticationTypeID()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->getAuthenticationTypeID();
        }

        /**
        * AuthenticationType::toggle
        * Toggle the active state of an AuthenticationType
        */
        public function toggle()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->toggle();
        }

        public function isEnabled()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->isEnabled();
        }

        public function getAuthenticationTypeStatus()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->getAuthenticationTypeStatus();
        }

        /**
        * AuthenticationType::disable
        * Disable an authentication type.
        */
        public function disable()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->disable();
        }

        /**
        * AuthenticationType::enable
        * Enable an authentication type.
        */
        public function enable()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->enable();
        }

        /**
        * AuthenticationType::delete
        * Remove an AuthenticationType, this should be used sparingly.
        */
        public function delete()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->delete();
        }

        /**
        * Return the path to a file, this is always BASE_URL.DIR_REL.FILE
        *
        * @param string $_file the relative path to the file.
        * @return bool|string
        */
        public function getAuthenticationTypeFilePath($_file)
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->getAuthenticationTypeFilePath($_file);
        }

        /**
        * Return the first existing file path in this order:
        *  - /models/authentication/types/HANDLE
        *  - /packages/PKGHANDLE/authentication/types/HANDLE
        *  - /concrete/models/authentication/types/HANDLE
        *  - /concrete/core/models/authentication/types/HANDLE
        *
        * @param string $_file The filename you want.
        * @return string This will return false if the file is not found.
        */
        protected function mapAuthenticationTypeFilePath($_file)
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->mapAuthenticationTypeFilePath($_file);
        }

        public function getAuthenticationTypeHandle()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->getAuthenticationTypeHandle();
        }

        /**
        * Render the settings form for this type.
        * Settings forms are expected to handle their own submissions and redirect to the appropriate page.
        * Otherwise, if the method exists, all $_REQUEST variables with the arrangement: HANDLE[]
        * in an array to the AuthenticationTypeController::saveTypeForm
        */
        public function renderTypeForm()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->renderTypeForm();
        }

        /**
        * Render the login form for this authentication type.
        *
        * @param string $element
        * @param array  $params
        */
        public function renderForm($element = "form", $params = array())
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->renderForm($element, $params);
        }

        /**
        * Render the hook form for saving the profile settings.
        * All settings are expected to be saved by each individual authentication type
        */
        public function renderHook()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->renderHook();
        }

        public function hasHook()
        {
            /** @var Concrete\Core\Authentication\AuthenticationType $instance */
            return $instance->hasHook();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class Block extends \Concrete\Core\Block\Block
    {

        /** @var \Concrete\Core\Block\Block */
        protected static $instance;

        public static function populateManually($blockInfo, $c, $a)
        {
            return Concrete\Core\Block\Block::populateManually($blockInfo, $c, $a);
        }

        /**
        * Returns a global block
        */
        public static function getByName($globalBlockName)
        {
            return Concrete\Core\Block\Block::getByName($globalBlockName);
        }

        public static function getByID($bID, $c = null, $a = null)
        {
            return Concrete\Core\Block\Block::getByID($bID, $c, $a);
        }

        public function getBlockTypeID()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockTypeID();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function getAreaHandle()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getAreaHandle();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        public function getProxyBlock()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getProxyBlock();
        }

        public function setProxyBlock($block)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setProxyBlock($block);
        }

        public function display($view = "view")
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->display($view);
        }

        public function isGlobal()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->isGlobal();
        }

        public function getBlockCachedRecord()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockCachedRecord();
        }

        public function getBlockCachedOutput($area)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockCachedOutput($area);
        }

        public function isBlockInStack()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->isBlockInStack();
        }

        public function getBlockCollectionObject()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockCollectionObject();
        }

        public function getOriginalCollection()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getOriginalCollection();
        }

        public function getBlockID()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockID();
        }

        public function setBlockCachedOutput($content, $lifetime, $area)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setBlockCachedOutput($content, $lifetime, $area);
        }

        public function inc($file)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->inc($file);
        }

        public function getBlockPath()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockPath();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getPackageHandle();
        }

        public function getBlockTypeHandle()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockTypeHandle();
        }

        public function revertToAreaPermissions()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->revertToAreaPermissions();
        }

        public function loadNewCollection(&$c)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->loadNewCollection($c);
        }

        public function setBlockAreaObject(&$a)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setBlockAreaObject($a);
        }

        public function disableBlockVersioning()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->disableBlockVersioning();
        }

        public function getNumChildren()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getNumChildren();
        }

        public function getController()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getController();
        }

        public function getInstance()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getInstance();
        }

        public function getBlockTypeObject()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockTypeObject();
        }

        public function getCollectionList()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getCollectionList();
        }

        public function update($data)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->update($data);
        }

        public function refreshBlockOutputCache()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->refreshBlockOutputCache();
        }

        public function getBlockCollectionID()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockCollectionID();
        }

        public function isActive()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->isActive();
        }

        public function deactivate()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->deactivate();
        }

        public function activate()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->activate();
        }

        public function alias($c)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->alias($c);
        }

        public function overrideAreaPermissions()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->overrideAreaPermissions();
        }

        public function overrideBlockTypeCacheSettings()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->overrideBlockTypeCacheSettings();
        }

        public function getBlockCacheSettingsObject()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockCacheSettingsObject();
        }

        public function cacheBlockOutput()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->cacheBlockOutput();
        }

        public function cacheBlockOutputOnPost()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->cacheBlockOutputOnPost();
        }

        public function cacheBlockOutputForRegisteredUsers()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->cacheBlockOutputForRegisteredUsers();
        }

        public function getBlockOutputCacheLifetime()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockOutputCacheLifetime();
        }

        public function getCustomStyleSetID()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getCustomStyleSetID();
        }

        public function getBlockAreaObject()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockAreaObject();
        }

        /**
        * Move block to a new collection
        *
        * @param Collection $collection
        * @param Area       $area
        * @return bool
        */
        public function move(Concrete\Core\Page\Collection\Collection $collection, Concrete\Core\Area\Area $area)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->move($collection, $area);
        }

        public function duplicate($nc, $isCopyFromMasterCollectionPropagation = false)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->duplicate($nc, $isCopyFromMasterCollectionPropagation);
        }

        public function getCustomStyle($force = false)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getCustomStyle($force);
        }

        public function resetCustomCacheSettings()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->resetCustomCacheSettings();
        }

        public function setCustomCacheSettings($enabled, $enabledOnPost, $enabledForRegistered, $lifetime)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setCustomCacheSettings($enabled, $enabledOnPost, $enabledForRegistered, $lifetime);
        }

        public function setCustomStyleSet(Concrete\Core\StyleCustomizer\Inline\StyleSet $set)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setCustomStyleSet($set);
        }

        public function resetCustomStyle()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->resetCustomStyle();
        }

        /**
        * Removes a cached version of the block
        */
        public function refreshCache()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->refreshCache();
        }

        public function setBlockCollectionObject($c)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setBlockCollectionObject($c);
        }

        public function getBlockTypeName()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockTypeName();
        }

        public function getBlockUserID()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockUserID();
        }

        /**
        * Gets the date the block was added
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getBlockDateAdded()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockDateAdded();
        }

        public function getBlockDateLastModified()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockDateLastModified();
        }

        public function setBlockActionCollectionID($bActionCID)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setBlockActionCollectionID($bActionCID);
        }

        public function getBlockEditAction()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockEditAction();
        }

        public function _getBlockAction()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->_getBlockAction();
        }

        /**
        * @return integer|false The block action collection id or false if not found
        */
        public function getBlockActionCollectionID()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockActionCollectionID();
        }

        public function getBlockUpdateInformationAction()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockUpdateInformationAction();
        }

        public function getBlockUpdateCssAction()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockUpdateCssAction();
        }

        public function isEditable()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->isEditable();
        }

        public function delete($forceDelete = false)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->delete($forceDelete);
        }

        public function deleteBlock($forceDelete = false)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->deleteBlock($forceDelete);
        }

        public function isAlias($c = null)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->isAlias($c);
        }

        public function setOriginalBlockID($originalBID)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setOriginalBlockID($originalBID);
        }

        public function moveBlockToDisplayOrderPosition($afterBlock)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->moveBlockToDisplayOrderPosition($afterBlock);
        }

        public function getBlockDisplayOrder()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockDisplayOrder();
        }

        public function setAbsoluteBlockDisplayOrder($do)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setAbsoluteBlockDisplayOrder($do);
        }

        public function doOverrideAreaPermissions()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->doOverrideAreaPermissions();
        }

        public function setCustomTemplate($template)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setCustomTemplate($template);
        }

        public function updateBlockInformation($data)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->updateBlockInformation($data);
        }

        public function setName($name)
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->setName($name);
        }

        public function refreshCacheAll()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->refreshCacheAll();
        }

        public function export($node, $exportType = "full")
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->export($node, $exportType);
        }

        public function isAliasOfMasterCollection()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->isAliasOfMasterCollection();
        }

        public function getBlockName()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockName();
        }

        public function getBlockFilename()
        {
            /** @var Concrete\Core\Block\Block $instance */
            return $instance->getBlockFilename();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    /**
    * @Entity
    * @Table(name="BlockTypes")
    */
    class BlockType extends \Concrete\Core\Block\BlockType\BlockType
    {

        /** @var \Concrete\Core\Block\BlockType\BlockType */
        protected static $instance;

        /**
        * Retrieves a BlockType object based on its btHandle
        *
        * @return BlockType
        */
        public static function getByHandle($btHandle)
        {
            return Concrete\Core\Block\BlockType\BlockType::getByHandle($btHandle);
        }

        /**
        * Clears output and record caches.
        */
        public static function clearCache()
        {
            return Concrete\Core\Block\BlockType\BlockType::clearCache();
        }

        /**
        * Retrieves a BlockType object based on its btID
        *
        * @return BlockType
        */
        public static function getByID($btID)
        {
            return Concrete\Core\Block\BlockType\BlockType::getByID($btID);
        }

        /**
        * @deprecated
        */
        public static function installBlockTypeFromPackage($btHandle, $pkg)
        {
            return Concrete\Core\Block\BlockType\BlockType::installBlockTypeFromPackage($btHandle, $pkg);
        }

        /**
        * Installs a BlockType that is passed via a btHandle string. The core or override directories are parsed.
        */
        public static function installBlockType($btHandle, $pkg = false)
        {
            return Concrete\Core\Block\BlockType\BlockType::installBlockType($btHandle, $pkg);
        }

        /**
        * Return the class file that this BlockType uses
        *
        * @return string
        */
        public static function getBlockTypeMappedClass($btHandle, $pkgHandle = false)
        {
            return Concrete\Core\Block\BlockType\BlockType::getBlockTypeMappedClass($btHandle, $pkgHandle);
        }

        /**
        * Sets the block type handle
        */
        public function setBlockTypeName($btName)
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->setBlockTypeName($btName);
        }

        /**
        * Sets the block type description
        */
        public function setBlockTypeDescription($btDescription)
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->setBlockTypeDescription($btDescription);
        }

        /**
        * Sets the block type handle
        */
        public function setBlockTypeHandle($btHandle)
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->setBlockTypeHandle($btHandle);
        }

        /**
        * Determines if the block type has templates available
        *
        * @return boolean
        */
        public function hasAddTemplate()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->hasAddTemplate();
        }

        /**
        * gets the available composer templates
        * used for editing instances of the BlockType while in the composer ui in the dashboard
        *
        * @return TemplateFile[]
        */
        public function getBlockTypeComposerTemplates()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeComposerTemplates();
        }

        /**
        * @return string
        */
        public function getBlockTypeHandle()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeHandle();
        }

        /**
        * if a the current BlockType supports inline edit or not
        *
        * @return boolean
        */
        public function supportsInlineEdit()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->supportsInlineEdit();
        }

        /**
        * if a the current BlockType supports inline add or not
        *
        * @return boolean
        */
        public function supportsInlineAdd()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->supportsInlineAdd();
        }

        /**
        * Returns true if the block type is internal (and therefore cannot be removed) a core block
        *
        * @return boolean
        */
        public function isInternalBlockType()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->isInternalBlockType();
        }

        /**
        * returns the width in pixels that the block type's editing dialog will open in
        *
        * @return int
        */
        public function getBlockTypeInterfaceWidth()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeInterfaceWidth();
        }

        /**
        * returns the height in pixels that the block type's editing dialog will open in
        *
        * @return int
        */
        public function getBlockTypeInterfaceHeight()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeInterfaceHeight();
        }

        /**
        * If true, container classes will not be wrapped around this block type in edit mode (if the
        * theme in question supports a grid framework.
        * @return bool
        */
        public function ignorePageThemeGridFrameworkContainer()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->ignorePageThemeGridFrameworkContainer();
        }

        /**
        * returns the id of the BlockType's package if it's in a package
        *
        * @return int
        */
        public function getPackageID()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getPackageID();
        }

        /**
        * gets the BlockTypes description text
        *
        * @return string
        */
        public function getBlockTypeDescription()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeDescription();
        }

        /**
        * @return string
        */
        public function getBlockTypeName()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeName();
        }

        /**
        * @return boolean
        */
        public function isCopiedWhenPropagated()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->isCopiedWhenPropagated();
        }

        /**
        * If true, this block is not versioned on a page – it is included as is on all versions of the page, even when updated.
        *
        * @return boolean
        */
        public function includeAll()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->includeAll();
        }

        /**
        * @deprecated
        */
        public function getBlockTypeClassFromHandle()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeClassFromHandle();
        }

        /**
        * Returns the class for the current block type.
        */
        public function getBlockTypeClass()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeClass();
        }

        /**
        * returns the handle of the BlockType's package if it's in a package
        *
        * @return string
        */
        public function getPackageHandle()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getPackageHandle();
        }

        /**
        * Returns an array of all BlockTypeSet objects that this block is in
        */
        public function getBlockTypeSets()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeSets();
        }

        /**
        * @return int
        */
        public function getBlockTypeID()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeID();
        }

        /**
        * Returns the number of unique instances of this block throughout the entire site
        * note - this count could include blocks in areas that are no longer rendered by the theme
        *
        * @param boolean specify true if you only want to see the number of blocks in active pages
        * @return int
        */
        public function getCount($ignoreUnapprovedVersions = false)
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getCount($ignoreUnapprovedVersions);
        }

        /**
        * Not a permissions call. Actually checks to see whether this block is not an internal one.
        *
        * @return boolean
        */
        public function canUnInstall()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->canUnInstall();
        }

        /**
        * if a the current BlockType is Internal or not - meaning one of the core built-in concrete5 blocks
        *
        * @access private
        * @return boolean
        */
        public function isBlockTypeInternal()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->isBlockTypeInternal();
        }

        /**
        * Renders a particular view of a block type, using the public $controller variable as the block type's controller
        *
        * @param string template 'view' for the default
        * @return void
        */
        public function render($view = "view")
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->render($view);
        }

        /**
        * get's the block type controller
        *
        * @return BlockTypeController
        */
        public function getController()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getController();
        }

        /**
        * Gets the custom templates available for the current BlockType
        *
        * @return TemplateFile[]
        */
        public function getBlockTypeCustomTemplates()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->getBlockTypeCustomTemplates();
        }

        /**
        * @private
        */
        public function setBlockTypeDisplayOrder($displayOrder)
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->setBlockTypeDisplayOrder($displayOrder);
        }

        /**
        * refreshes the BlockType's database schema throws an Exception if error
        *
        * @return void
        */
        public function refresh()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->refresh();
        }

        protected function loadFromController($bta)
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->loadFromController($bta);
        }

        /**
        * Removes the block type. Also removes instances of content.
        */
        public function delete()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->delete();
        }

        /**
        * Adds a block to the system without adding it to a collection.
        * Passes page and area data along if it is available, however.
        *
        * @param mixed            $data
        * @param bool|\Collection $c
        * @param bool|\Area       $a
        * @return bool|\Concrete\Core\Block\Block
        */
        public function add($data, $c = false, $a = false)
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->add($data, $c, $a);
        }

        /**
        * Loads controller
        */
        protected function loadController()
        {
            /** @var Concrete\Core\Block\BlockType\BlockType $instance */
            return $instance->loadController();
        }

    }

    class BlockTypeList extends \Concrete\Core\Block\BlockType\BlockTypeList
    {

        /** @var \Concrete\Core\Block\BlockType\BlockTypeList */
        protected static $instance;

        public function includeInternalBlockTypes()
        {
            /** @var Concrete\Core\Block\BlockType\BlockTypeList $instance */
            return $instance->includeInternalBlockTypes();
        }

        public function get($itemsToGet = 100, $offset = 0)
        {
            /** @var Concrete\Core\Block\BlockType\BlockTypeList $instance */
            return $instance->get($itemsToGet, $offset);
        }

        public function filterByPackage(Concrete\Core\Package\Package $pkg)
        {
            /** @var Concrete\Core\Block\BlockType\BlockTypeList $instance */
            return $instance->filterByPackage($pkg);
        }

        /**
        * @todo comment this one
        * @param string $xml
        * @return void
        */
        public static function exportList($xml)
        {
            return Concrete\Core\Block\BlockType\BlockTypeList::exportList($xml);
        }

        /**
        * returns an array of Block Types used in the concrete5 Dashboard
        * @return BlockType[]
        */
        public static function getDashboardBlockTypes()
        {
            return Concrete\Core\Block\BlockType\BlockTypeList::getDashboardBlockTypes();
        }

        /**
        * Gets a list of block types that are not installed, used to get blocks that can be installed
        * This function only surveys the web/blocks directory - it's not looking at the package level.
        * @return BlockType[]
        */
        public static function getAvailableList()
        {
            return Concrete\Core\Block\BlockType\BlockTypeList::getAvailableList();
        }

        /**
        * gets a list of installed BlockTypes
        * @return BlockType[]
        */
        public static function getInstalledList()
        {
            return Concrete\Core\Block\BlockType\BlockTypeList::getInstalledList();
        }

        public static function resetBlockTypeDisplayOrder($column = "btID")
        {
            return Concrete\Core\Block\BlockType\BlockTypeList::resetBlockTypeDisplayOrder($column);
        }

        public function getTotal()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getTotal();
        }

        public function debug($dbg = true)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->debug($dbg);
        }

        protected function setQuery($query)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setQuery($query);
        }

        protected function getQuery()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getQuery();
        }

        public function addToQuery($query)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->addToQuery($query);
        }

        protected function setupAutoSort()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupAutoSort();
        }

        protected function executeBase()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->executeBase();
        }

        protected function setupSortByString()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupSortByString();
        }

        protected function setupAttributeSort()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupAttributeSort();
        }

        /**
        * Adds a filter to this item list
        */
        public function filter($column, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->filter($column, $value, $comparison);
        }

        public function getSearchResultsClass($field)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getSearchResultsClass($field);
        }

        public function sortBy($key, $dir = "asc")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->sortBy($key, $dir);
        }

        public function groupBy($key)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->groupBy($key);
        }

        public function having($column, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->having($column, $value, $comparison);
        }

        public function getSortByURL($column, $dir = "asc", $baseURL = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getSortByURL($column, $dir, $baseURL, $additionalVars);
        }

        protected function setupAttributeFilters($join)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupAttributeFilters($join);
        }

        public function filterByAttribute($column, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->filterByAttribute($column, $value, $comparison);
        }

        public function enableStickySearchRequest($namespace = false)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->enableStickySearchRequest($namespace);
        }

        public function getQueryStringSortVariable()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getQueryStringSortVariable();
        }

        public function getQueryStringSortDirectionVariable()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getQueryStringSortDirectionVariable();
        }

        protected function getStickySearchNameSpace()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getStickySearchNameSpace();
        }

        public function resetSearchRequest($namespace = "")
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->resetSearchRequest($namespace);
        }

        public function addToSearchRequest($key, $value)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->addToSearchRequest($key, $value);
        }

        public function getSearchRequest()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSearchRequest();
        }

        public function setItemsPerPage($num)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setItemsPerPage($num);
        }

        public function getItemsPerPage()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getItemsPerPage();
        }

        public function setItems($items)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setItems($items);
        }

        protected function loadQueryStringPagingVariable()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->loadQueryStringPagingVariable();
        }

        public function setNameSpace($ns)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setNameSpace($ns);
        }

        /**
        * Returns an array of object by "page"
        */
        public function getPage($page = false)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getPage($page);
        }

        protected function setCurrentPage($page = false)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setCurrentPage($page);
        }

        /**
        * Displays summary text about a list
        */
        public function displaySummary($right_content = "")
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->displaySummary($right_content);
        }

        public function isActiveSortColumn($column)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->isActiveSortColumn($column);
        }

        public function getActiveSortColumn()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getActiveSortColumn();
        }

        public function getActiveSortDirection()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getActiveSortDirection();
        }

        public function requiresPaging()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->requiresPaging();
        }

        public function getPagination($url = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getPagination($url, $additionalVars);
        }

        /**
        * Gets paging that works in our new format */
        public function displayPagingV2($script = false, $return = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->displayPagingV2($script, $return, $additionalVars);
        }

        /**
        * Gets standard HTML to display paging */
        public function displayPaging($script = false, $return = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->displayPaging($script, $return, $additionalVars);
        }

        /**
        * Returns an object with properties useful for paging
        */
        public function getSummary()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSummary();
        }

        public function getSortBy()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSortBy();
        }

        public function getSortByDirection()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSortByDirection();
        }

        /**
        * Sets up a multiple columns to search by. Each argument is taken "as-is" (including asc or desc) and concatenated with commas
        * Note that this is overrides any previous sortByMultiple() call, and all sortBy() calls. Alternatively, you can pass a single
        * array with multiple columns to sort by as its values.
        * e.g. $list->sortByMultiple('columna desc', 'columnb asc');
        * or $list->sortByMultiple(array('columna desc', 'columnb asc'));
        */
        public function sortByMultiple()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->sortByMultiple();
        }

    }

    class BlockTypeSet extends \Concrete\Core\Block\BlockType\Set
    {

        /** @var \Concrete\Core\Block\BlockType\Set */
        protected static $instance;

        public static function getByID($btsID)
        {
            return Concrete\Core\Block\BlockType\Set::getByID($btsID);
        }

        public static function getByHandle($btsHandle)
        {
            return Concrete\Core\Block\BlockType\Set::getByHandle($btsHandle);
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Block\BlockType\Set::getListByPackage($pkg);
        }

        public static function getList()
        {
            return Concrete\Core\Block\BlockType\Set::getList();
        }

        public function getBlockTypeSetID()
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->getBlockTypeSetID();
        }

        public function getBlockTypeSetHandle()
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->getBlockTypeSetHandle();
        }

        public function getBlockTypeSetName()
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->getBlockTypeSetName();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->getPackageHandle();
        }

        /** Returns the display name for this instance (localized and escaped accordingly to $format)
        * @param string $format = 'html' Escape the result in html format (if $format is 'html'). If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getBlockTypeSetDisplayName($format = "html")
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->getBlockTypeSetDisplayName($format);
        }

        public function updateBlockTypeSetName($btsName)
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->updateBlockTypeSetName($btsName);
        }

        public function updateBlockTypeSetHandle($btsHandle)
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->updateBlockTypeSetHandle($btsHandle);
        }

        public function addBlockType(Concrete\Core\Block\BlockType\BlockType $bt)
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->addBlockType($bt);
        }

        public function clearBlockTypes()
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->clearBlockTypes();
        }

        public static function add($btsHandle, $btsName, $pkg = false)
        {
            return Concrete\Core\Block\BlockType\Set::add($btsHandle, $btsName, $pkg);
        }

        public function export($axml)
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->export($axml);
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Block\BlockType\Set::exportList($xml);
        }

        public function getBlockTypes()
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->getBlockTypes();
        }

        public function get()
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->get();
        }

        public function contains($bt)
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->contains($bt);
        }

        public function delete()
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->delete();
        }

        public function deleteKey($bt)
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->deleteKey($bt);
        }

        protected function rescanDisplayOrder()
        {
            /** @var Concrete\Core\Block\BlockType\Set $instance */
            return $instance->rescanDisplayOrder();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class Cache extends \Concrete\Core\Cache\Cache
    {

        /** @var \Concrete\Core\Cache\Cache */
        protected static $instance;

        /**
        * Loads the composite driver from constants
        * @param $level
        * @return \Stash\Interfaces\DriverInterface
        */
        protected function loadConfig($level)
        {
            /** @var Concrete\Core\Cache\Cache $instance */
            return $instance->loadConfig($level);
        }

        /**
        * Deletes an item from the cache
        * @param string $key Name of the cache item ID
        * @return bool True if deleted, false if not
        */
        public function delete($key)
        {
            /** @var Concrete\Core\Cache\Cache $instance */
            return $instance->delete($key);
        }

        /**
        * Checks if an item exists in the cache
        * @param string $key Name of the cache item ID
        * @return bool True if exists, false if not
        */
        public function exists($key)
        {
            /** @var Concrete\Core\Cache\Cache $instance */
            return $instance->exists($key);
        }

        /**
        * Removes all values from the cache
        */
        public function flush()
        {
            /** @var Concrete\Core\Cache\Cache $instance */
            return $instance->flush();
        }

        /**
        * Gets a value from the cache
        * @param string $key Name of the cache item ID
        * @return \Stash\Interfaces\ItemInterface
        */
        public function getItem($key)
        {
            /** @var Concrete\Core\Cache\Cache $instance */
            return $instance->getItem($key);
        }

        /**
        * Enables the cache
        */
        public function enable()
        {
            /** @var Concrete\Core\Cache\Cache $instance */
            return $instance->enable();
        }

        /**
        * Disables the cache
        */
        public function disable()
        {
            /** @var Concrete\Core\Cache\Cache $instance */
            return $instance->disable();
        }

        /**
        * Returns true if the cache is enabled, false if not
        * @return bool
        */
        public function isEnabled()
        {
            /** @var Concrete\Core\Cache\Cache $instance */
            return $instance->isEnabled();
        }

        /**
        * Disables all cache levels
        */
        public static function disableAll()
        {
            return Concrete\Core\Cache\Cache::disableAll();
        }

        /**
        * Enables all cache levels
        */
        public static function enableAll()
        {
            return Concrete\Core\Cache\Cache::enableAll();
        }

    }

    /**
    * @deprecated
    * @package Concrete\Core\Cache
    */
    class CacheLocal extends \Concrete\Core\Cache\CacheLocal
    {

        /** @var \Concrete\Core\Cache\CacheLocal */
        protected static $instance;

        /**
        * Creates a cache key based on the group and id by running it through md5
        * @param string $group Name of the cache group
        * @param string $id Name of the cache item ID
        * @return string The cache key
        */
        public static function key($group, $id)
        {
            return Concrete\Core\Cache\CacheLocal::key($group, $id);
        }

        public static function get()
        {
            return Concrete\Core\Cache\CacheLocal::get();
        }

        public static function getEntry($type, $id)
        {
            return Concrete\Core\Cache\CacheLocal::getEntry($type, $id);
        }

        public static function flush()
        {
            return Concrete\Core\Cache\CacheLocal::flush();
        }

        public static function delete($type, $id)
        {
            return Concrete\Core\Cache\CacheLocal::delete($type, $id);
        }

        public static function set($type, $id, $object)
        {
            return Concrete\Core\Cache\CacheLocal::set($type, $id, $object);
        }

    }

    class Collection extends \Concrete\Core\Page\Collection\Collection
    {

        /** @var \Concrete\Core\Page\Collection\Collection */
        protected static $instance;

        public static function reindexPendingPages()
        {
            return Concrete\Core\Page\Collection\Collection::reindexPendingPages();
        }

        public static function getByHandle($handle)
        {
            return Concrete\Core\Page\Collection\Collection::getByHandle($handle);
        }

        public function addCollection($data)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->addCollection($data);
        }

        /**
        * @param int   $cID
        * @param mixed $version 'RECENT'|'ACTIVE'|version id
        * @return Collection
        */
        public static function getByID($cID, $version = "RECENT")
        {
            return Concrete\Core\Page\Collection\Collection::getByID($cID, $version);
        }

        public function loadVersionObject($cvID = "ACTIVE")
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->loadVersionObject($cvID);
        }

        public function getVersionToModify()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getVersionToModify();
        }

        public function getVersionObject()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getVersionObject();
        }

        public function cloneVersion($versionComments)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->cloneVersion($versionComments);
        }

        public function getCollectionID()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionID();
        }

        public function getNextVersionComments()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getNextVersionComments();
        }

        public function getFeatureAssignments()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getFeatureAssignments();
        }

        /**
        * Returns the value of the attribute with the handle $ak
        * of the current object.
        *
        * $displayMode makes it possible to get the correct output
        * value. When you need the raw attribute value or object, use
        * this:
        * <code>
        * $c = Page::getCurrentPage();
        * $attributeValue = $c->getAttribute('attribute_handle');
        * </code>
        *
        * But if you need the formatted output supported by some
        * attribute, use this:
        * <code>
        * $c = Page::getCurrentPage();
        * $attributeValue = $c->getAttribute('attribute_handle', 'display');
        * </code>
        *
        * An attribute type like "date" will then return the date in
        * the correct format just like other attributes will show
        * you a nicely formatted output and not just a simple value
        * or object.
        *
        *
        * @param string|object $akHandle
        * @param boolean       $displayMode
        * @return type
        */
        public function getAttribute($akHandle, $displayMode = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getAttribute($akHandle, $displayMode);
        }

        public function getCollectionAttributeValue($ak)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionAttributeValue($ak);
        }

        public function clearCollectionAttributes($retainAKIDs = array())
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->clearCollectionAttributes($retainAKIDs);
        }

        public function getVersionID()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getVersionID();
        }

        public function reindex($index = false, $actuallyDoReindex = true)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->reindex($index, $actuallyDoReindex);
        }

        public function clearAttribute($ak)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->clearAttribute($ak);
        }

        public function getAttributeValueObject($ak, $createIfNotFound = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getAttributeValueObject($ak, $createIfNotFound);
        }

        public function getSetCollectionAttributes()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getSetCollectionAttributes();
        }

        public function addAttribute($ak, $value)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->addAttribute($ak, $value);
        }

        public function setAttribute($ak, $value)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->setAttribute($ak, $value);
        }

        /**
        * @param string $arHandle
        * @return Area
        */
        public function getArea($arHandle)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getArea($arHandle);
        }

        public function hasAliasedContent()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->hasAliasedContent();
        }

        public function getCollectionDateLastModified()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionDateLastModified();
        }

        public function getCollectionHandle()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionHandle();
        }

        public function getCollectionDateAdded()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionDateAdded();
        }

        /**
        * Retrieves all custom style rules that should be inserted into the header on a page, whether they are defined in areas
        * or blocks
        */
        public function outputCustomStyleHeaderItems($return = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->outputCustomStyleHeaderItems($return);
        }

        public function getAreaCustomStyle($area, $force = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getAreaCustomStyle($area, $force);
        }

        public function resetAreaCustomStyle($area)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->resetAreaCustomStyle($area);
        }

        public function setCustomStyleSet($area, $set)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->setCustomStyleSet($area, $set);
        }

        public function relateVersionEdits($oc)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->relateVersionEdits($oc);
        }

        public function getCollectionTypeID()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionTypeID();
        }

        public function getPageTypeID()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getPageTypeID();
        }

        public function rescanDisplayOrder($areaName)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->rescanDisplayOrder($areaName);
        }

        public function refreshCache()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->refreshCache();
        }

        public function getGlobalBlocks()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getGlobalBlocks();
        }

        /**
        * List the blocks in a collection or area within a collection
        *
        * @param bool|string $arHandle . If specified, returns just the blocks in an area
        * @return array
        */
        public function getBlocks($arHandle = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getBlocks($arHandle);
        }

        /**
        * List the block IDs in a collection or area within a collection
        *
        * @param bool|string $arHandle . If specified, returns just the blocks in an area
        * @return array
        */
        public function getBlockIDs($arHandle = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getBlockIDs($arHandle);
        }

        public function addBlock($bt, $a, $data)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->addBlock($bt, $a, $data);
        }

        public function getCollectionAreaDisplayOrder($arHandle, $ignoreVersions = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionAreaDisplayOrder($arHandle, $ignoreVersions);
        }

        public function addFeature(Concrete\Core\Feature\Feature $fe)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->addFeature($fe);
        }

        public function markModified()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->markModified();
        }

        public function delete()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->delete();
        }

        public function duplicateCollection()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->duplicateCollection();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class CollectionAttributeKey extends \Concrete\Core\Attribute\Key\CollectionKey
    {

        /** @var \Concrete\Core\Attribute\Key\CollectionKey */
        protected static $instance;

        public function getIndexedSearchTable()
        {
            /** @var Concrete\Core\Attribute\Key\CollectionKey $instance */
            return $instance->getIndexedSearchTable();
        }

        /**
        * Returns an attribute value list of attributes and values (duh) which a collection version can store
        * against its object.
        * @return AttributeValueList
        */
        public static function getAttributes($cID, $cvID, $method = "getValue")
        {
            return Concrete\Core\Attribute\Key\CollectionKey::getAttributes($cID, $cvID, $method);
        }

        public static function getColumnHeaderList()
        {
            return Concrete\Core\Attribute\Key\CollectionKey::getColumnHeaderList();
        }

        public static function getSearchableIndexedList()
        {
            return Concrete\Core\Attribute\Key\CollectionKey::getSearchableIndexedList();
        }

        public static function getSearchableList()
        {
            return Concrete\Core\Attribute\Key\CollectionKey::getSearchableList();
        }

        public function getAttributeValue($avID, $method = "getValue")
        {
            /** @var Concrete\Core\Attribute\Key\CollectionKey $instance */
            return $instance->getAttributeValue($avID, $method);
        }

        public static function getByID($akID)
        {
            return Concrete\Core\Attribute\Key\CollectionKey::getByID($akID);
        }

        public static function getByHandle($akHandle)
        {
            return Concrete\Core\Attribute\Key\CollectionKey::getByHandle($akHandle);
        }

        public static function getList()
        {
            return Concrete\Core\Attribute\Key\CollectionKey::getList();
        }

        protected function saveAttribute($nvc, $value = false)
        {
            /** @var Concrete\Core\Attribute\Key\CollectionKey $instance */
            return $instance->saveAttribute($nvc, $value);
        }

        public static function add($at, $args, $pkg = false)
        {
            return Concrete\Core\Attribute\Key\CollectionKey::add($at, $args, $pkg);
        }

        public function delete()
        {
            /** @var Concrete\Core\Attribute\Key\CollectionKey $instance */
            return $instance->delete();
        }

        public function getSearchIndexFieldDefinition()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getSearchIndexFieldDefinition();
        }

        /**
        * Returns the name for this attribute key
        */
        public function getAttributeKeyName()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyName();
        }

        /** Returns the display name for this attribute (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *    Escape the result in html format (if $format is 'html').
        *    If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getAttributeKeyDisplayName($format = "html")
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyDisplayName($format);
        }

        /**
        * Returns the handle for this attribute key
        */
        public function getAttributeKeyHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyHandle();
        }

        /**
        * Deprecated. Going to be replaced by front end display name
        */
        public function getAttributeKeyDisplayHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyDisplayHandle();
        }

        /**
        * Returns the ID for this attribute key
        */
        public function getAttributeKeyID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyID();
        }

        public function getAttributeKeyCategoryID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyCategoryID();
        }

        /**
        * Returns whether the attribute key is searchable
        */
        public function isAttributeKeySearchable()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeySearchable();
        }

        /**
        * Returns whether the attribute key is internal
        */
        public function isAttributeKeyInternal()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyInternal();
        }

        /**
        * Returns whether the attribute key is indexed as a "keyword search" field.
        */
        public function isAttributeKeyContentIndexed()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyContentIndexed();
        }

        /**
        * Returns whether the attribute key is one that was automatically created by a process.
        */
        public function isAttributeKeyAutoCreated()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyAutoCreated();
        }

        /**
        * Returns whether the attribute key is included in the standard search for this category.
        */
        public function isAttributeKeyColumnHeader()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyColumnHeader();
        }

        /**
        * Returns whether the attribute key is one that can be edited through the frontend.
        */
        public function isAttributeKeyEditable()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyEditable();
        }

        /**
        * Loads the required attribute fields for this instantiated attribute
        */
        protected function load($akIdentifier, $loadBy = "akID")
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->load($akIdentifier, $loadBy);
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getPackageHandle();
        }

        public static function getInstanceByID($akID)
        {
            return Concrete\Core\Attribute\Key\Key::getInstanceByID($akID);
        }

        /**
        * Returns an attribute type object
        */
        public function getAttributeType()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeType();
        }

        /**
        * Returns the attribute type handle
        */
        public function getAttributeTypeHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeTypeHandle();
        }

        public function getAttributeKeyType()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyType();
        }

        public function export($axml, $exporttype = "full")
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->export($axml, $exporttype);
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Attribute\Key\Key::exportList($xml);
        }

        /**
        * Note, this queries both the pkgID found on the AttributeKeys table AND any attribute keys of a special type
        * installed by that package, and any in categories by that package.
        * That's because a special type, if the package is uninstalled, is going to be unusable
        * by attribute keys that still remain.
        */
        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Attribute\Key\Key::getListByPackage($pkg);
        }

        public static function import(SimpleXMLElement $ak)
        {
            return Concrete\Core\Attribute\Key\Key::import($ak);
        }

        public function refreshCache()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->refreshCache();
        }

        /**
        * Updates an attribute key.
        */
        public function update($args)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->update($args);
        }

        /**
        * Duplicates an attribute key
        */
        public function duplicate($args = array())
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->duplicate($args);
        }

        public function inAttributeSet($as)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->inAttributeSet($as);
        }

        public function setAttributeKeyColumnHeader($r)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->setAttributeKeyColumnHeader($r);
        }

        /**
        * @param string $table
        * @param array $columnHeaders
        * @param \Concrete\Core\Attribute\Value\ValueList $attribs
        * @param mixed $rs this is a legacy parameter, not actually used anymore
        */
        public function reindex($table, $columnHeaders, $attribs, $rs = null)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->reindex($table, $columnHeaders, $attribs, $rs);
        }

        public function updateSearchIndex($prevHandle = false)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->updateSearchIndex($prevHandle);
        }

        public function getAttributeValueIDList()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeValueIDList();
        }

        /**
        * Adds a generic attribute record (with this type) to the AttributeValues table
        */
        public function addAttributeValue()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->addAttributeValue();
        }

        public function getAttributeKeyIconSRC()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyIconSRC();
        }

        public function getController()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getController();
        }

        /**
        * Renders a view for this attribute key. If no view is default we display it's "view"
        * Valid views are "view", "form" or a custom view (if the attribute has one in its directory)
        * Additionally, an attribute does not have to have its own interface. If it doesn't, then whatever
        * is printed in the corresponding $view function in the attribute's controller is printed out.
        */
        public function render($view = "view", $value = false, $return = false)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->render($view, $value, $return);
        }

        public function validateAttributeForm($h = false)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->validateAttributeForm($h);
        }

        public function createIndexedSearchTable()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->createIndexedSearchTable();
        }

        public function setAttributeSet($as)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->setAttributeSet($as);
        }

        public function clearAttributeSets()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->clearAttributeSets();
        }

        public function getAttributeSets()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeSets();
        }

        /**
        * Saves an attribute using its stock form.
        */
        public function saveAttributeForm($obj)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->saveAttributeForm($obj);
        }

        /**
        * Sets an attribute directly with a passed value.
        */
        public function setAttribute($obj, $value)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->setAttribute($obj, $value);
        }

        /**
        * @deprecated
        */
        public function outputSearchHTML()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->outputSearchHTML();
        }

        /**
        * @deprecated
        */
        public function getKeyName()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getKeyName();
        }

        /**
        * Returns the handle for this attribute key
        */
        public function getKeyHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getKeyHandle();
        }

        /**
        * Returns the ID for this attribute key
        */
        public function getKeyID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getKeyID();
        }

        public static function exportTranslations()
        {
            return Concrete\Core\Attribute\Key\Key::exportTranslations();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class CollectionVersion extends \Concrete\Core\Page\Collection\Version\Version
    {

        /** @var \Concrete\Core\Page\Collection\Version\Version */
        protected static $instance;

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        public function refreshCache()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->refreshCache();
        }

        public static function get(&$c, $cvID)
        {
            return Concrete\Core\Page\Collection\Version\Version::get($c, $cvID);
        }

        public function getAttribute($ak, $c, $displayMode = false)
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getAttribute($ak, $c, $displayMode);
        }

        public function isApproved()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->isApproved();
        }

        public function isMostRecent()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->isMostRecent();
        }

        public function isNew()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->isNew();
        }

        public function getVersionID()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getVersionID();
        }

        public function getCollectionID()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getCollectionID();
        }

        public function getVersionName()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getVersionName();
        }

        public function getVersionComments()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getVersionComments();
        }

        public function getVersionAuthorUserID()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getVersionAuthorUserID();
        }

        public function getVersionApproverUserID()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getVersionApproverUserID();
        }

        public function getVersionAuthorUserName()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getVersionAuthorUserName();
        }

        public function getVersionApproverUserName()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getVersionApproverUserName();
        }

        public function getCustomAreaStyles()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getCustomAreaStyles();
        }

        /**
        * Gets the date the collection version was created
        *
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getVersionDateCreated()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->getVersionDateCreated();
        }

        public function canWrite()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->canWrite();
        }

        public function setComment($comment)
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->setComment($comment);
        }

        public function createNew($versionComments)
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->createNew($versionComments);
        }

        public function approve($doReindexImmediately = true)
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->approve($doReindexImmediately);
        }

        public function discard()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->discard();
        }

        public function canDiscard()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->canDiscard();
        }

        public function removeNewStatus()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->removeNewStatus();
        }

        public function deny()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->deny();
        }

        public function delete()
        {
            /** @var Concrete\Core\Page\Collection\Version\Version $instance */
            return $instance->delete();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class ConcreteAuthenticationTypeController extends \Concrete\Authentication\Concrete\Controller
    {

        /** @var \Concrete\Authentication\Concrete\Controller */
        protected static $instance;

        public function getHandle()
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->getHandle();
        }

        public function deauthenticate(Concrete\Core\User\User $u)
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->deauthenticate($u);
        }

        public function getAuthenticationTypeIconHTML()
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->getAuthenticationTypeIconHTML();
        }

        public function verifyHash(Concrete\Core\User\User $u, $hash)
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->verifyHash($u, $hash);
        }

        public function view()
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->view();
        }

        public function buildHash(Concrete\Core\User\User $u, $test = 1)
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->buildHash($u, $test);
        }

        public function isAuthenticated(Concrete\Core\User\User $u)
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->isAuthenticated($u);
        }

        public function saveAuthenticationType($values)
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->saveAuthenticationType($values);
        }

        /**
        * Called when a user wants a password reset email sent, is passed in the user's email address.
        */
        public function forgot_password()
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->forgot_password();
        }

        public function change_password($uHash = "")
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->change_password($uHash);
        }

        public function password_changed()
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->password_changed();
        }

        public function email_validated()
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->email_validated();
        }

        public function invalid_token()
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->invalid_token();
        }

        public function authenticate()
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->authenticate();
        }

        public function v($hash = "")
        {
            /** @var Concrete\Authentication\Concrete\Controller $instance */
            return $instance->v($hash);
        }

        public function getAuthenticationType()
        {
            /** @var Concrete\Core\Authentication\AuthenticationTypeController $instance */
            return $instance->getAuthenticationType();
        }

        public function completeAuthentication(Concrete\Core\User\User $u)
        {
            /** @var Concrete\Core\Authentication\AuthenticationTypeController $instance */
            return $instance->completeAuthentication($u);
        }

        public function setViewObject(Concrete\Core\View\AbstractView $view)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setViewObject($view);
        }

        public function setTheme($mixed)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setTheme($mixed);
        }

        public function getTheme()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getTheme();
        }

        public function setThemeViewTemplate($template)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setThemeViewTemplate($template);
        }

        public function getThemeViewTemplate()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getThemeViewTemplate();
        }

        public function getControllerActionPath()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getControllerActionPath();
        }

        public function getViewObject()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getViewObject();
        }

        public function action()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->action();
        }

        public function requireAsset()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->requireAsset();
        }

        /**
        * Adds an item to the view's header. This item will then be automatically printed out before the <body> section of the page
        *
        * @param string $item
        * @return void
        */
        public function addHeaderItem($item)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->addHeaderItem($item);
        }

        /**
        * Adds an item to the view's footer. This item will then be automatically printed out before the </body> section of the page
        *
        * @param string $item
        * @return void
        */
        public function addFooterItem($item)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->addFooterItem($item);
        }

        public function set($key, $val)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->set($key, $val);
        }

        public function getSets()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getSets();
        }

        public function shouldRunControllerTask()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->shouldRunControllerTask();
        }

        public function getHelperObjects()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getHelperObjects();
        }

        public function get($key = null, $defaultValue = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->get($key, $defaultValue);
        }

        public function getTask()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getTask();
        }

        public function getAction()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getAction();
        }

        public function getParameters()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getParameters();
        }

        public function on_start()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->on_start();
        }

        public function on_before_render()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->on_before_render();
        }

        /**
        * @deprecated
        */
        public function isPost()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->isPost();
        }

        public function post($key = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->post($key);
        }

        public function redirect()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->redirect();
        }

        public function runTask($action, $parameters)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->runTask($action, $parameters);
        }

        public function runAction($action, $parameters = array())
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->runAction($action, $parameters);
        }

        public function request($key = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->request($key);
        }

    }

    class Controller extends \Concrete\Core\Controller\Controller
    {

        /** @var \Concrete\Core\Controller\Controller */
        protected static $instance;

        public function setViewObject(Concrete\Core\View\AbstractView $view)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setViewObject($view);
        }

        public function setTheme($mixed)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setTheme($mixed);
        }

        public function getTheme()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getTheme();
        }

        public function setThemeViewTemplate($template)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setThemeViewTemplate($template);
        }

        public function getThemeViewTemplate()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getThemeViewTemplate();
        }

        public function getControllerActionPath()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getControllerActionPath();
        }

        public function getViewObject()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getViewObject();
        }

        public function action()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->action();
        }

        public function requireAsset()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->requireAsset();
        }

        /**
        * Adds an item to the view's header. This item will then be automatically printed out before the <body> section of the page
        *
        * @param string $item
        * @return void
        */
        public function addHeaderItem($item)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->addHeaderItem($item);
        }

        /**
        * Adds an item to the view's footer. This item will then be automatically printed out before the </body> section of the page
        *
        * @param string $item
        * @return void
        */
        public function addFooterItem($item)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->addFooterItem($item);
        }

        public function set($key, $val)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->set($key, $val);
        }

        public function getSets()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getSets();
        }

        public function shouldRunControllerTask()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->shouldRunControllerTask();
        }

        public function getHelperObjects()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getHelperObjects();
        }

        public function get($key = null, $defaultValue = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->get($key, $defaultValue);
        }

        public function getTask()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getTask();
        }

        public function getAction()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getAction();
        }

        public function getParameters()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getParameters();
        }

        public function on_start()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->on_start();
        }

        public function on_before_render()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->on_before_render();
        }

        /**
        * @deprecated
        */
        public function isPost()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->isPost();
        }

        public function post($key = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->post($key);
        }

        public function redirect()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->redirect();
        }

        public function runTask($action, $parameters)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->runTask($action, $parameters);
        }

        public function runAction($action, $parameters = array())
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->runAction($action, $parameters);
        }

        public function request($key = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->request($key);
        }

    }

    class Conversation extends \Concrete\Core\Conversation\Conversation
    {

        /** @var \Concrete\Core\Conversation\Conversation */
        protected static $instance;

        public function getConversationID()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationID();
        }

        public function getConversationParentMessageID()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationParentMessageID();
        }

        public function getConversationDateCreated()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationDateCreated();
        }

        public function getConversationDateLastMessage()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationDateLastMessage();
        }

        public function getConversationMessagesTotal()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationMessagesTotal();
        }

        public function getConversationMaxFileSizeGuest()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationMaxFileSizeGuest();
        }

        public function getConversationMaxFileSizeRegistered()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationMaxFileSizeRegistered();
        }

        public function getConversationMaxFilesGuest()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationMaxFilesGuest();
        }

        public function getConversationMaxFilesRegistered()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationMaxFilesRegistered();
        }

        public function getConversationFileExtensions()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationFileExtensions();
        }

        public function getConversationAttachmentOverridesEnabled()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationAttachmentOverridesEnabled();
        }

        public function getConversationAttachmentsEnabled()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationAttachmentsEnabled();
        }

        public function overrideGlobalPermissions()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->overrideGlobalPermissions();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public static function getByID($cnvID)
        {
            return Concrete\Core\Conversation\Conversation::getByID($cnvID);
        }

        public function getConversationPageObject()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationPageObject();
        }

        public function setConversationPageObject($c)
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->setConversationPageObject($c);
        }

        public function updateConversationSummary()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->updateConversationSummary();
        }

        /**
        * @return \Concrete\Core\User\UserInfo[]
        */
        public function getConversationMessageUsers()
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->getConversationMessageUsers();
        }

        public function setConversationParentMessageID($cnvParentMessageID)
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->setConversationParentMessageID($cnvParentMessageID);
        }

        public static function add()
        {
            return Concrete\Core\Conversation\Conversation::add();
        }

        public function setConversationAttachmentOverridesEnabled($cnvAttachmentOverridesEnabled)
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->setConversationAttachmentOverridesEnabled($cnvAttachmentOverridesEnabled);
        }

        public function setConversationAttachmentsEnabled($cnvAttachmentsEnabled)
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->setConversationAttachmentsEnabled($cnvAttachmentsEnabled);
        }

        public function setConversationMaxFileSizeGuest($cnvMaxFileSizeGuest)
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->setConversationMaxFileSizeGuest($cnvMaxFileSizeGuest);
        }

        public function setConversationMaxFileSizeRegistered($cnvMaxFileSizeRegistered)
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->setConversationMaxFileSizeRegistered($cnvMaxFileSizeRegistered);
        }

        public function setConversationMaxFilesGuest($cnvMaxFilesGuest)
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->setConversationMaxFilesGuest($cnvMaxFilesGuest);
        }

        public function setConversationMaxFilesRegistered($cnvMaxFilesRegistered)
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->setConversationMaxFilesRegistered($cnvMaxFilesRegistered);
        }

        public function setConversationFileExtensions($cnvFileExtensions)
        {
            /** @var Concrete\Core\Conversation\Conversation $instance */
            return $instance->setConversationFileExtensions($cnvFileExtensions);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class ConversationEditor extends \Concrete\Core\Conversation\Editor\Editor
    {

        /** @var \Concrete\Core\Conversation\Editor\Editor */
        protected static $instance;

        public function setConversationEditorInputName($input)
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->setConversationEditorInputName($input);
        }

        public function getConversationEditorInputName()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->getConversationEditorInputName();
        }

        /**
        * @param Conversation $cnvObject
        */
        public function setConversationObject($cnvObject)
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->setConversationObject($cnvObject);
        }

        public function getConversationObject()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->getConversationObject();
        }

        /**
        * @param Message $message
        */
        public function setConversationMessageObject(Concrete\Core\Conversation\Message\Message $message)
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->setConversationMessageObject($message);
        }

        public function getConversationMessageObject()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->getConversationMessageObject();
        }

        /**
        * @return string Returns the editor's formatted message
        */
        public function getConversationEditorMessageBody()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->getConversationEditorMessageBody();
        }

        public function getConversationEditorHandle()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->getConversationEditorHandle();
        }

        public function getConversationEditorID()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->getConversationEditorID();
        }

        public function getConversationEditorName()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->getConversationEditorName();
        }

        public function isConversationEditorActive()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->isConversationEditorActive();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->getPackageID();
        }

        /**
        * Looks up and returns the Packag
        * @return string
        */
        public function getPackageHandle()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->getPackageHandle();
        }

        /**
        * Looks up and returns a Package object for the current Editor's Package ID
        * @return Package
        */
        public function getPackageObject()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->getPackageObject();
        }

        /**
        * @return Editor|null Returns the first found active conversation editor, null if no editor is active
        */
        public static function getActive()
        {
            return Concrete\Core\Conversation\Editor\Editor::getActive();
        }

        /**
        * Returns the appropriate conversation editor object for the given cnvEditorID
        * @param int $cnvEditorID
        * @return Editor|null
        */
        public static function getByID($cnvEditorID)
        {
            return Concrete\Core\Conversation\Editor\Editor::getByID($cnvEditorID);
        }

        /**
        * Returns the appropriate conversation editor object for the given cnvEditorHandle
        * @param $cnvEditorHandle
        * @return Editor|null
        */
        public static function getByHandle($cnvEditorHandle)
        {
            return Concrete\Core\Conversation\Editor\Editor::getByHandle($cnvEditorHandle);
        }

        /**
        * This function is used to instantiate a Conversation Editor object from an associative array
        * @param array $record an associative array of field value pairs for the ConversationEditor record
        * @return Editor|null
        */
        protected function createFromRecord($record)
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->createFromRecord($record);
        }

        /**
        * outputs an HTML block containing the add message form for the current Conversation Editor
        */
        public function outputConversationEditorAddMessageForm()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->outputConversationEditorAddMessageForm();
        }

        /**
        * outputs an HTML block containing the message reply form for the current Conversation Editor
        */
        public function outputConversationEditorReplyMessageForm()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->outputConversationEditorReplyMessageForm();
        }

        /**
        * Returns a formatted conversation message body string, based on configuration options supplied
        * @param \Concrete\Core\Conversation\Conversation $cnv
        * @param string $cnvMessageBody
        * @param array $config
        * @return string
        */
        public function formatConversationMessageBody($cnv, $cnvMessageBody, $config = array())
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->formatConversationMessageBody($cnv, $cnvMessageBody, $config);
        }

        /**
        * Creates a database record for the Conversation Editor, then attempts to return the object
        * @param string $cnvEditorHandle
        * @param string $cnvEditorName
        * @param bool|Package $pkg
        * @return Editor|null
        */
        public static function add($cnvEditorHandle, $cnvEditorName, $pkg = false)
        {
            return Concrete\Core\Conversation\Editor\Editor::add($cnvEditorHandle, $cnvEditorName, $pkg);
        }

        /**
        * Removes the current editor object's record from the database
        */
        public function delete()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->delete();
        }

        /**
        * Deactivates all other Conversation Editors, and activates the current one
        */
        public function activate()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->activate();
        }

        /**
        * Function used to deactivate
        */
        protected function deactivateAll()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->deactivateAll();
        }

        /**
        * Returns an array of all Editor Objects
        * @param null $pkgID An optional filter for Package ID
        * @return Editor[]
        */
        public static function getList($pkgID = null)
        {
            return Concrete\Core\Conversation\Editor\Editor::getList($pkgID);
        }

        /**
        * Returns an array of all Editor objects for the given package object
        * @param Package $pkg
        * @return Editor[]
        */
        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Conversation\Editor\Editor::getListByPackage($pkg);
        }

        /**
        * Adds a ConversationEditors node and all Editor records to the provided SimleXMLElement object provided
        * @param \SimpleXMLElement $xml
        */
        public static function exportList($xml)
        {
            return Concrete\Core\Conversation\Editor\Editor::exportList($xml);
        }

        /**
        * Returns whether or not the current Conversation Editor has an options form
        * @return bool
        */
        public function hasOptionsForm()
        {
            /** @var Concrete\Core\Conversation\Editor\Editor $instance */
            return $instance->hasOptionsForm();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class ConversationFlagType extends \Concrete\Core\Conversation\FlagType\FlagType
    {

        /** @var \Concrete\Core\Conversation\FlagType\FlagType */
        protected static $instance;

        public function getConversationFlagTypeHandle()
        {
            /** @var Concrete\Core\Conversation\FlagType\FlagType $instance */
            return $instance->getConversationFlagTypeHandle();
        }

        public function getConversationFlagTypeID()
        {
            /** @var Concrete\Core\Conversation\FlagType\FlagType $instance */
            return $instance->getConversationFlagTypeID();
        }

        public function init($id, $handle)
        {
            /** @var Concrete\Core\Conversation\FlagType\FlagType $instance */
            return $instance->init($id, $handle);
        }

        public function delete()
        {
            /** @var Concrete\Core\Conversation\FlagType\FlagType $instance */
            return $instance->delete();
        }

        public static function getByID($id)
        {
            return Concrete\Core\Conversation\FlagType\FlagType::getByID($id);
        }

        public static function getByhandle($handle)
        {
            return Concrete\Core\Conversation\FlagType\FlagType::getByhandle($handle);
        }

        public static function add($handle)
        {
            return Concrete\Core\Conversation\FlagType\FlagType::add($handle);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class ConversationMessage extends \Concrete\Core\Conversation\Message\Message
    {

        /** @var \Concrete\Core\Conversation\Message\Message */
        protected static $instance;

        public function getConversationMessageID()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageID();
        }

        public function getConversationMessageSubject()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageSubject();
        }

        public function getConversationMessageBody()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageBody();
        }

        public function getConversationID()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationID();
        }

        public function getConversationEditorID()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationEditorID();
        }

        public function getConversationMessageLevel()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageLevel();
        }

        public function getConversationMessageParentID()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageParentID();
        }

        public function getConversationMessageSubmitIP()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageSubmitIP();
        }

        public function getConversationMessageSubmitUserAgent()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageSubmitUserAgent();
        }

        public function isConversationMessageDeleted()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->isConversationMessageDeleted();
        }

        public function isConversationMessageFlagged()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->isConversationMessageFlagged();
        }

        public function isConversationMessageApproved()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->isConversationMessageApproved();
        }

        public function getConversationMessageFlagTypes()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageFlagTypes();
        }

        public function getConversationMessageTotalRatingScore()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageTotalRatingScore();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function conversationMessageHasActiveChildren()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->conversationMessageHasActiveChildren();
        }

        public function setMessageBody($cnvMessageBody)
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->setMessageBody($cnvMessageBody);
        }

        public function conversationMessageHasChildren()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->conversationMessageHasChildren();
        }

        public function approve()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->approve();
        }

        public function unapprove()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->unapprove();
        }

        public function conversationMessageHasFlag($flag)
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->conversationMessageHasFlag($flag);
        }

        public function getConversationMessageBodyOutput($dashboardOverride = false)
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageBodyOutput($dashboardOverride);
        }

        public function getConversationObject()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationObject();
        }

        public function getConversationMessageUserObject()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageUserObject();
        }

        public function getConversationMessageUserID()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageUserID();
        }

        public function getConversationMessageDateTime()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageDateTime();
        }

        public function getConversationMessageDateTimeOutput($format = "default")
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageDateTimeOutput($format);
        }

        public function rateMessage(Concrete\Core\Conversation\Rating\Type $ratingType, $commentRatingIP, $commentRatingUserID, $post = array())
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->rateMessage($ratingType, $commentRatingIP, $commentRatingUserID, $post);
        }

        public function hasRatedMessage(Concrete\Core\Conversation\Rating\Type $ratingType, $user)
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->hasRatedMessage($ratingType, $user);
        }

        public function getConversationMessageRating(Concrete\Core\Conversation\Rating\Type $ratingType)
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getConversationMessageRating($ratingType);
        }

        public function flag($flagtype)
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->flag($flagtype);
        }

        public function unflag($flagtype)
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->unflag($flagtype);
        }

        public static function getByID($cnvMessageID)
        {
            return Concrete\Core\Conversation\Message\Message::getByID($cnvMessageID);
        }

        public function attachFile(Concrete\Core\File\File $f)
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->attachFile($f);
        }

        public function removeFile($cnvMessageAttachmentID)
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->removeFile($cnvMessageAttachmentID);
        }

        public function getAttachments($cnvMessageID)
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->getAttachments($cnvMessageID);
        }

        public static function getByAttachmentID($cnvMessageAttachmentID)
        {
            return Concrete\Core\Conversation\Message\Message::getByAttachmentID($cnvMessageAttachmentID);
        }

        public static function add($cnv, $cnvMessageSubject, $cnvMessageBody, $parentMessage = false, $user = false)
        {
            return Concrete\Core\Conversation\Message\Message::add($cnv, $cnvMessageSubject, $cnvMessageBody, $parentMessage, $user);
        }

        public function delete()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->delete();
        }

        public function restore()
        {
            /** @var Concrete\Core\Conversation\Message\Message $instance */
            return $instance->restore();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class ConversationRatingType extends \Concrete\Core\Conversation\Rating\Type
    {

        /** @var \Concrete\Core\Conversation\Rating\Type */
        protected static $instance;

        public function getRatingTypeHandle()
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->getRatingTypeHandle();
        }

        public function getRatingTypeID()
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->getRatingTypeID();
        }

        /** Returns the list of all conversation rating types
        * @return array[Type]
        */
        public static function getList()
        {
            return Concrete\Core\Conversation\Rating\Type::getList();
        }

        public static function add($cnvRatingTypeHandle, $cnvRatingTypeName, $cnvRatingTypeCommunityPoints, $pkgID = false)
        {
            return Concrete\Core\Conversation\Rating\Type::add($cnvRatingTypeHandle, $cnvRatingTypeName, $cnvRatingTypeCommunityPoints, $pkgID);
        }

        public static function getByHandle($cnvRatingTypeHandle)
        {
            return Concrete\Core\Conversation\Rating\Type::getByHandle($cnvRatingTypeHandle);
        }

        public static function getByID($cnvRatingTypeID)
        {
            return Concrete\Core\Conversation\Rating\Type::getByID($cnvRatingTypeID);
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Conversation\Rating\Type::exportList($xml);
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Conversation\Rating\Type::getListByPackage($pkg);
        }

        public function delete()
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->delete();
        }

        public function getConversationRatingTypeHandle()
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->getConversationRatingTypeHandle();
        }

        public function getConversationRatingTypeName()
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->getConversationRatingTypeName();
        }

        public function getConversationRatingTypeID()
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->getConversationRatingTypeID();
        }

        public function getConversationRatingTypePoints()
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->getConversationRatingTypePoints();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->getPackageHandle();
        }

        public function getPackageObject()
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->getPackageObject();
        }

        /** Returns the display name for this instance (localized and escaped accordingly to $format)
        * @param string $format = 'html' Escape the result in html format (if $format is 'html'). If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getConversationRatingTypeDisplayName($format = "html")
        {
            /** @var Concrete\Core\Conversation\Rating\Type $instance */
            return $instance->getConversationRatingTypeDisplayName($format);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class Cookie extends Concrete\Core\Cookie\CookieJar
    {

        /** @var Concrete\Core\Cookie\CookieJar */
        protected static $instance;

        /**
        * Adds a CookieObject to the cookie pantry
        * @param string $name The cookie name
        * @param string|null $value The value of the cookie
        * @param int $expire The number of seconds until the cookie expires
        * @param string $path The path for the cookie
        * @param null|string $domain The domain the cookie is available to
        * @param bool $secure whether the cookie should only be transmitted over a HTTPS connection from the client
        * @param bool $httpOnly Whether the cookie will be made accessible only through the HTTP protocol
        * @return \Symfony\Component\HttpFoundation\Cookie
        */
        public static function set($name, $value = null, $expire = 0, $path = "/", $domain = null, $secure = false, $httpOnly = true)
        {
            /** @var Concrete\Core\Cookie\CookieJar $instance */
            return $instance->set($name, $value, $expire, $path, $domain, $secure, $httpOnly);
        }

        /**
        * Adds a CookieObject to the array of cookies for the object
        * @param CookieObject $cookie
        */
        public static function add($cookie)
        {
            /** @var Concrete\Core\Cookie\CookieJar $instance */
            return $instance->add($cookie);
        }

        /**
        * Used to determine if the cookie key exists in the pantry
        * @param string $cookie
        * @return bool
        */
        public static function has($cookie)
        {
            /** @var Concrete\Core\Cookie\CookieJar $instance */
            return $instance->has($cookie);
        }

        public static function clear($cookie)
        {
            /** @var Concrete\Core\Cookie\CookieJar $instance */
            return $instance->clear($cookie);
        }

        /**
        * @param string $name    The key the cookie is stored under
        * @param mixed  $default A value to return if the cookie isn't set
        * @return mixed
        */
        public static function get($name, $default = null)
        {
            /** @var Concrete\Core\Cookie\CookieJar $instance */
            return $instance->get($name, $default);
        }

        /**
        * @return CookieObject[]
        */
        public static function getCookies()
        {
            /** @var Concrete\Core\Cookie\CookieJar $instance */
            return $instance->getCookies();
        }

        public static function getClearedCookies()
        {
            /** @var Concrete\Core\Cookie\CookieJar $instance */
            return $instance->getClearedCookies();
        }

        protected static function getRequest()
        {
            /** @var Concrete\Core\Cookie\CookieJar $instance */
            return $instance->getRequest();
        }

    }

    /**
    * Useful functions for getting paths for concrete5 items.
    * @package Core
    * @author Andrew Embler <andrew@concrete5.org>
    * @copyright  Copyright (c) 2003-2012 Concrete5. (http://www.concrete5.org)
    * @license    http://www.concrete5.org/license/     MIT License
    */
    class Environment extends \Concrete\Core\Foundation\Environment
    {

        /** @var \Concrete\Core\Foundation\Environment */
        protected static $instance;

        public static function get()
        {
            return Concrete\Core\Foundation\Environment::get();
        }

        public static function saveCachedEnvironmentObject()
        {
            return Concrete\Core\Foundation\Environment::saveCachedEnvironmentObject();
        }

        public function clearOverrideCache()
        {
            /** @var Concrete\Core\Foundation\Environment $instance */
            return $instance->clearOverrideCache();
        }

        public function reset()
        {
            /** @var Concrete\Core\Foundation\Environment $instance */
            return $instance->reset();
        }

        /**
        * Builds a list of all overrides
        */
        protected function getOverrides()
        {
            /** @var Concrete\Core\Foundation\Environment $instance */
            return $instance->getOverrides();
        }

        public function getDirectoryContents($dir, $ignoreFilesArray = array(), $recursive = false)
        {
            /** @var Concrete\Core\Foundation\Environment $instance */
            return $instance->getDirectoryContents($dir, $ignoreFilesArray, $recursive);
        }

        public function overrideCoreByPackage($segment, $pkgOrHandle)
        {
            /** @var Concrete\Core\Foundation\Environment $instance */
            return $instance->overrideCoreByPackage($segment, $pkgOrHandle);
        }

        public function getRecord($segment, $pkgHandle = false)
        {
            /** @var Concrete\Core\Foundation\Environment $instance */
            return $instance->getRecord($segment, $pkgHandle);
        }

        /**
        * Bypasses overrides cache to get record
        */
        public function getUncachedRecord($segment, $pkgHandle = false)
        {
            /** @var Concrete\Core\Foundation\Environment $instance */
            return $instance->getUncachedRecord($segment, $pkgHandle);
        }

        /**
        * Returns a full path to the subpath segment. Returns false if not found
        */
        public function getPath($subpath, $pkgIdentifier = false)
        {
            /** @var Concrete\Core\Foundation\Environment $instance */
            return $instance->getPath($subpath, $pkgIdentifier);
        }

        /**
        * Returns  a public URL to the subpath item. Returns false if not found
        */
        public function getURL($subpath, $pkgIdentifier = false)
        {
            /** @var Concrete\Core\Foundation\Environment $instance */
            return $instance->getURL($subpath, $pkgIdentifier);
        }

    }

    class FacebookAuthenticationTypeController extends \Concrete\Authentication\Facebook\Controller
    {

        /** @var \Concrete\Authentication\Facebook\Controller */
        protected static $instance;

        public function registrationGroupID()
        {
            /** @var Concrete\Authentication\Facebook\Controller $instance */
            return $instance->registrationGroupID();
        }

        public function supportsRegistration()
        {
            /** @var Concrete\Authentication\Facebook\Controller $instance */
            return $instance->supportsRegistration();
        }

        public function getAuthenticationTypeIconHTML()
        {
            /** @var Concrete\Authentication\Facebook\Controller $instance */
            return $instance->getAuthenticationTypeIconHTML();
        }

        public function getHandle()
        {
            /** @var Concrete\Authentication\Facebook\Controller $instance */
            return $instance->getHandle();
        }

        /**
        * @return Facebook
        */
        public function getService()
        {
            /** @var Concrete\Authentication\Facebook\Controller $instance */
            return $instance->getService();
        }

        public function saveAuthenticationType($args)
        {
            /** @var Concrete\Authentication\Facebook\Controller $instance */
            return $instance->saveAuthenticationType($args);
        }

        public function edit()
        {
            /** @var Concrete\Authentication\Facebook\Controller $instance */
            return $instance->edit();
        }

        public function handle_authentication_attempt()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\OAuth2\GenericOauth2TypeController $instance */
            return $instance->handle_authentication_attempt();
        }

        public function handle_authentication_callback()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\OAuth2\GenericOauth2TypeController $instance */
            return $instance->handle_authentication_callback();
        }

        public function handle_attach_attempt()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\OAuth2\GenericOauth2TypeController $instance */
            return $instance->handle_attach_attempt();
        }

        public function handle_attach_callback()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\OAuth2\GenericOauth2TypeController $instance */
            return $instance->handle_attach_callback();
        }

        public function view()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\OAuth2\GenericOauth2TypeController $instance */
            return $instance->view();
        }

        /**
        * Method used to clean up.
        * This method must be defined, if it isn't needed, leave it blank.
        *
        * @param \User $u
        * @return void
        */
        public function deauthenticate(Concrete\Core\User\User $u)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\OAuth2\GenericOauth2TypeController $instance */
            return $instance->deauthenticate($u);
        }

        /**
        * Test user authentication status.
        *
        * @param \User $u
        * @return bool Returns true if user is authenticated, false if not
        */
        public function isAuthenticated(Concrete\Core\User\User $u)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\OAuth2\GenericOauth2TypeController $instance */
            return $instance->isAuthenticated($u);
        }

        /**
        * @return Array
        */
        public function getAdditionalRequestParameters()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->getAdditionalRequestParameters();
        }

        public function handle_error($error = false)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->handle_error($error);
        }

        public function showError($error = null)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->showError($error);
        }

        public function markError($error)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->markError($error);
        }

        public function handle_success($message = false)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->handle_success($message);
        }

        public function showSuccess($message = null)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->showSuccess($message);
        }

        public function markSuccess($message)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->markSuccess($message);
        }

        /**
        * Empty because we don't use the authenticate entry point.
        */
        public function authenticate()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->authenticate();
        }

        /**
        * Create a cookie hash to identify the user indefinitely
        *
        * @param \User $u
        * @return string Unique hash to be used to verify the users identity
        */
        public function buildHash(Concrete\Core\User\User $u)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->buildHash($u);
        }

        /**
        * Hash authentication disabled for oauth
        *
        * @param \User  $u object requesting verification.
        * @param string $hash
        * @return bool        returns true if the hash is valid, false if not
        */
        public function verifyHash(Concrete\Core\User\User $u, $hash)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->verifyHash($u, $hash);
        }

        /**
        * @return \OAuth\Common\Token\TokenInterface
        */
        public function getToken()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->getToken();
        }

        /**
        * @param \OAuth\Common\Token\TokenInterface $token
        */
        public function setToken(OAuth\Common\Token\TokenInterface $token)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->setToken($token);
        }

        /**
        * @return null|\User
        * @throws Exception
        */
        protected function attemptAuthentication()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->attemptAuthentication();
        }

        /**
        * @return \OAuth\UserData\Extractor\ExtractorInterface
        * @throws \OAuth\UserData\Exception\UndefinedExtractorException
        */
        public function getExtractor($new = false)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->getExtractor($new);
        }

        protected function isValid()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->isValid();
        }

        /**
        * @param $binding
        * @return bool|string
        * @throws \Doctrine\DBAL\DBALException
        */
        public function getBoundUserID($binding)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->getBoundUserID($binding);
        }

        protected function createUser()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->createUser();
        }

        public function supportsEmail()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->supportsEmail();
        }

        public function supportsUniqueId()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->supportsUniqueId();
        }

        public function supportsVerifiedEmail()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->supportsVerifiedEmail();
        }

        public function isEmailVerified()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->isEmailVerified();
        }

        public function getEmail()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->getEmail();
        }

        public function supportsFullName()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->supportsFullName();
        }

        public function supportsFirstName()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->supportsFirstName();
        }

        public function supportsLastName()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->supportsLastName();
        }

        public function getFirstName()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->getFirstName();
        }

        public function getLastName()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->getLastName();
        }

        public function getFullName()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->getFullName();
        }

        public function supportsUsername()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->supportsUsername();
        }

        public function getUsername()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->getUsername();
        }

        /**
        * @param \User $user
        * @param       $binding
        * @return int|null
        */
        public function bindUser(Concrete\Core\User\User $user, $binding)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->bindUser($user, $binding);
        }

        /**
        * @param $user_id
        * @param $binding
        * @return int|null
        */
        public function bindUserID($user_id, $binding)
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->bindUserID($user_id, $binding);
        }

        public function getUniqueId()
        {
            /** @var Concrete\Core\Authentication\Type\OAuth\GenericOauthTypeController $instance */
            return $instance->getUniqueId();
        }

        public function getAuthenticationType()
        {
            /** @var Concrete\Core\Authentication\AuthenticationTypeController $instance */
            return $instance->getAuthenticationType();
        }

        public function completeAuthentication(Concrete\Core\User\User $u)
        {
            /** @var Concrete\Core\Authentication\AuthenticationTypeController $instance */
            return $instance->completeAuthentication($u);
        }

        public function setViewObject(Concrete\Core\View\AbstractView $view)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setViewObject($view);
        }

        public function setTheme($mixed)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setTheme($mixed);
        }

        public function getTheme()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getTheme();
        }

        public function setThemeViewTemplate($template)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setThemeViewTemplate($template);
        }

        public function getThemeViewTemplate()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getThemeViewTemplate();
        }

        public function getControllerActionPath()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getControllerActionPath();
        }

        public function getViewObject()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getViewObject();
        }

        public function action()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->action();
        }

        public function requireAsset()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->requireAsset();
        }

        /**
        * Adds an item to the view's header. This item will then be automatically printed out before the <body> section of the page
        *
        * @param string $item
        * @return void
        */
        public function addHeaderItem($item)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->addHeaderItem($item);
        }

        /**
        * Adds an item to the view's footer. This item will then be automatically printed out before the </body> section of the page
        *
        * @param string $item
        * @return void
        */
        public function addFooterItem($item)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->addFooterItem($item);
        }

        public function set($key, $val)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->set($key, $val);
        }

        public function getSets()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getSets();
        }

        public function shouldRunControllerTask()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->shouldRunControllerTask();
        }

        public function getHelperObjects()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getHelperObjects();
        }

        public function get($key = null, $defaultValue = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->get($key, $defaultValue);
        }

        public function getTask()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getTask();
        }

        public function getAction()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getAction();
        }

        public function getParameters()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getParameters();
        }

        public function on_start()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->on_start();
        }

        public function on_before_render()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->on_before_render();
        }

        /**
        * @deprecated
        */
        public function isPost()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->isPost();
        }

        public function post($key = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->post($key);
        }

        public function redirect()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->redirect();
        }

        public function runTask($action, $parameters)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->runTask($action, $parameters);
        }

        public function runAction($action, $parameters = array())
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->runAction($action, $parameters);
        }

        public function request($key = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->request($key);
        }

    }

    /**
    * @Entity
    * @Table(name="Files")
    */
    class File extends \Concrete\Core\File\File
    {

        /** @var \Concrete\Core\File\File */
        protected static $instance;

        /**
        * returns a file object for the given file ID
        * @param int $fID
        * @return File
        */
        public static function getByID($fID)
        {
            return Concrete\Core\File\File::getByID($fID);
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function getPassword()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getPassword();
        }

        public function getStorageLocationID()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getStorageLocationID();
        }

        /**
        * @return \Concrete\Core\File\StorageLocation\StorageLocation
        */
        public function getFileStorageLocationObject()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getFileStorageLocationObject();
        }

        /**
        * @return array \Concrete\Core\File\Version
        */
        public function getFileVersions()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getFileVersions();
        }

        /**
        * Reindex the attributes on this file.
        * @return void
        */
        public function reindex()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->reindex();
        }

        public static function getRelativePathFromID($fID)
        {
            return Concrete\Core\File\File::getRelativePathFromID($fID);
        }

        protected function save()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->save();
        }

        public function setFileStorageLocation(Concrete\Core\File\StorageLocation\StorageLocation $newLocation)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->setFileStorageLocation($newLocation);
        }

        public function setPassword($pw)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->setPassword($pw);
        }

        public function setOriginalPage($ocID)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->setOriginalPage($ocID);
        }

        public function getOriginalPageObject()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getOriginalPageObject();
        }

        public function overrideFileSetPermissions()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->overrideFileSetPermissions();
        }

        public function resetPermissions($fOverrideSetPermissions = 0)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->resetPermissions($fOverrideSetPermissions);
        }

        public function getUserID()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getUserID();
        }

        public function setUserID($uID)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->setUserID($uID);
        }

        public function getFileSets()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getFileSets();
        }

        public function isStarred($u = false)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->isStarred($u);
        }

        public function getDateAdded()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getDateAdded();
        }

        /**
        * Returns a file version object that is to be written to. Computes whether we can use the current most recent version, OR a new one should be created
        */
        public function getVersionToModify($forceCreateNew = false)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getVersionToModify($forceCreateNew);
        }

        public function getFileID()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getFileID();
        }

        public function duplicate()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->duplicate();
        }

        public static function add($filename, $prefix, $data = array(), $fsl = false)
        {
            return Concrete\Core\File\File::add($filename, $prefix, $data, $fsl);
        }

        public function getApprovedVersion()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getApprovedVersion();
        }

        public function inFileSet($fs)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->inFileSet($fs);
        }

        /**
        * Removes a file, including all of its versions
        */
        public function delete()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->delete();
        }

        /**
        * returns the most recent FileVersion object
        * @return FileVersion
        */
        public function getRecentVersion()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getRecentVersion();
        }

        /**
        * returns the FileVersion object for the provided fvID
        * if none provided returns the approved version
        * @param int $fvID
        * @return Version
        */
        public function getVersion($fvID = null)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getVersion($fvID);
        }

        /**
        * Returns an array of all FileVersion objects owned by this file
        */
        public function getVersionList()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getVersionList();
        }

        public function getTotalDownloads()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getTotalDownloads();
        }

        public function getDownloadStatistics($limit = 20)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->getDownloadStatistics($limit);
        }

        /**
        * Tracks File Download, takes the cID of the page that the file was downloaded from
        * @param int $rcID
        * @return void
        */
        public function trackDownload($rcID = null)
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->trackDownload($rcID);
        }

        /**
        * @deprecated
        */
        public function isError()
        {
            /** @var Concrete\Core\File\File $instance */
            return $instance->isError();
        }

    }

    class FileAttributeKey extends \Concrete\Core\Attribute\Key\FileKey
    {

        /** @var \Concrete\Core\Attribute\Key\FileKey */
        protected static $instance;

        public function getIndexedSearchTable()
        {
            /** @var Concrete\Core\Attribute\Key\FileKey $instance */
            return $instance->getIndexedSearchTable();
        }

        /**
        * Returns an attribute value list of attributes and values (duh) which a collection version can store
        * against its object.
        * @return AttributeValueList
        */
        public static function getAttributes($fID, $fvID, $method = "getValue")
        {
            return Concrete\Core\Attribute\Key\FileKey::getAttributes($fID, $fvID, $method);
        }

        public function getAttributeValue($avID, $method = "getValue")
        {
            /** @var Concrete\Core\Attribute\Key\FileKey $instance */
            return $instance->getAttributeValue($avID, $method);
        }

        public static function getByHandle($akHandle)
        {
            return Concrete\Core\Attribute\Key\FileKey::getByHandle($akHandle);
        }

        public static function getByID($akID)
        {
            return Concrete\Core\Attribute\Key\FileKey::getByID($akID);
        }

        public static function getList()
        {
            return Concrete\Core\Attribute\Key\FileKey::getList();
        }

        public static function getSearchableList()
        {
            return Concrete\Core\Attribute\Key\FileKey::getSearchableList();
        }

        public static function getSearchableIndexedList()
        {
            return Concrete\Core\Attribute\Key\FileKey::getSearchableIndexedList();
        }

        public static function getImporterList($fv = false)
        {
            return Concrete\Core\Attribute\Key\FileKey::getImporterList($fv);
        }

        public static function getUserAddedList()
        {
            return Concrete\Core\Attribute\Key\FileKey::getUserAddedList();
        }

        /**
        * @access private
        */
        public static function get($akID)
        {
            return Concrete\Core\Attribute\Key\FileKey::get($akID);
        }

        protected function saveAttribute($f, $value = false)
        {
            /** @var Concrete\Core\Attribute\Key\FileKey $instance */
            return $instance->saveAttribute($f, $value);
        }

        public static function add($at, $args, $pkg = false)
        {
            return Concrete\Core\Attribute\Key\FileKey::add($at, $args, $pkg);
        }

        public static function getColumnHeaderList()
        {
            return Concrete\Core\Attribute\Key\FileKey::getColumnHeaderList();
        }

        public function delete()
        {
            /** @var Concrete\Core\Attribute\Key\FileKey $instance */
            return $instance->delete();
        }

        public function getSearchIndexFieldDefinition()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getSearchIndexFieldDefinition();
        }

        /**
        * Returns the name for this attribute key
        */
        public function getAttributeKeyName()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyName();
        }

        /** Returns the display name for this attribute (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *    Escape the result in html format (if $format is 'html').
        *    If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getAttributeKeyDisplayName($format = "html")
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyDisplayName($format);
        }

        /**
        * Returns the handle for this attribute key
        */
        public function getAttributeKeyHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyHandle();
        }

        /**
        * Deprecated. Going to be replaced by front end display name
        */
        public function getAttributeKeyDisplayHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyDisplayHandle();
        }

        /**
        * Returns the ID for this attribute key
        */
        public function getAttributeKeyID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyID();
        }

        public function getAttributeKeyCategoryID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyCategoryID();
        }

        /**
        * Returns whether the attribute key is searchable
        */
        public function isAttributeKeySearchable()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeySearchable();
        }

        /**
        * Returns whether the attribute key is internal
        */
        public function isAttributeKeyInternal()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyInternal();
        }

        /**
        * Returns whether the attribute key is indexed as a "keyword search" field.
        */
        public function isAttributeKeyContentIndexed()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyContentIndexed();
        }

        /**
        * Returns whether the attribute key is one that was automatically created by a process.
        */
        public function isAttributeKeyAutoCreated()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyAutoCreated();
        }

        /**
        * Returns whether the attribute key is included in the standard search for this category.
        */
        public function isAttributeKeyColumnHeader()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyColumnHeader();
        }

        /**
        * Returns whether the attribute key is one that can be edited through the frontend.
        */
        public function isAttributeKeyEditable()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyEditable();
        }

        /**
        * Loads the required attribute fields for this instantiated attribute
        */
        protected function load($akIdentifier, $loadBy = "akID")
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->load($akIdentifier, $loadBy);
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getPackageHandle();
        }

        public static function getInstanceByID($akID)
        {
            return Concrete\Core\Attribute\Key\Key::getInstanceByID($akID);
        }

        /**
        * Returns an attribute type object
        */
        public function getAttributeType()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeType();
        }

        /**
        * Returns the attribute type handle
        */
        public function getAttributeTypeHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeTypeHandle();
        }

        public function getAttributeKeyType()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyType();
        }

        public function export($axml, $exporttype = "full")
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->export($axml, $exporttype);
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Attribute\Key\Key::exportList($xml);
        }

        /**
        * Note, this queries both the pkgID found on the AttributeKeys table AND any attribute keys of a special type
        * installed by that package, and any in categories by that package.
        * That's because a special type, if the package is uninstalled, is going to be unusable
        * by attribute keys that still remain.
        */
        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Attribute\Key\Key::getListByPackage($pkg);
        }

        public static function import(SimpleXMLElement $ak)
        {
            return Concrete\Core\Attribute\Key\Key::import($ak);
        }

        public function refreshCache()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->refreshCache();
        }

        /**
        * Updates an attribute key.
        */
        public function update($args)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->update($args);
        }

        /**
        * Duplicates an attribute key
        */
        public function duplicate($args = array())
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->duplicate($args);
        }

        public function inAttributeSet($as)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->inAttributeSet($as);
        }

        public function setAttributeKeyColumnHeader($r)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->setAttributeKeyColumnHeader($r);
        }

        /**
        * @param string $table
        * @param array $columnHeaders
        * @param \Concrete\Core\Attribute\Value\ValueList $attribs
        * @param mixed $rs this is a legacy parameter, not actually used anymore
        */
        public function reindex($table, $columnHeaders, $attribs, $rs = null)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->reindex($table, $columnHeaders, $attribs, $rs);
        }

        public function updateSearchIndex($prevHandle = false)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->updateSearchIndex($prevHandle);
        }

        public function getAttributeValueIDList()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeValueIDList();
        }

        /**
        * Adds a generic attribute record (with this type) to the AttributeValues table
        */
        public function addAttributeValue()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->addAttributeValue();
        }

        public function getAttributeKeyIconSRC()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyIconSRC();
        }

        public function getController()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getController();
        }

        /**
        * Renders a view for this attribute key. If no view is default we display it's "view"
        * Valid views are "view", "form" or a custom view (if the attribute has one in its directory)
        * Additionally, an attribute does not have to have its own interface. If it doesn't, then whatever
        * is printed in the corresponding $view function in the attribute's controller is printed out.
        */
        public function render($view = "view", $value = false, $return = false)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->render($view, $value, $return);
        }

        public function validateAttributeForm($h = false)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->validateAttributeForm($h);
        }

        public function createIndexedSearchTable()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->createIndexedSearchTable();
        }

        public function setAttributeSet($as)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->setAttributeSet($as);
        }

        public function clearAttributeSets()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->clearAttributeSets();
        }

        public function getAttributeSets()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeSets();
        }

        /**
        * Saves an attribute using its stock form.
        */
        public function saveAttributeForm($obj)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->saveAttributeForm($obj);
        }

        /**
        * Sets an attribute directly with a passed value.
        */
        public function setAttribute($obj, $value)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->setAttribute($obj, $value);
        }

        /**
        * @deprecated
        */
        public function outputSearchHTML()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->outputSearchHTML();
        }

        /**
        * @deprecated
        */
        public function getKeyName()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getKeyName();
        }

        /**
        * Returns the handle for this attribute key
        */
        public function getKeyHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getKeyHandle();
        }

        /**
        * Returns the ID for this attribute key
        */
        public function getKeyID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getKeyID();
        }

        public static function exportTranslations()
        {
            return Concrete\Core\Attribute\Key\Key::exportTranslations();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class FileImporter extends \Concrete\Core\File\Importer
    {

        /** @var \Concrete\Core\File\Importer */
        protected static $instance;

        /**
        * Returns a text string explaining the error that was passed
        * @param int $code
        * @return string
        */
        public function getErrorMessage($code)
        {
            /** @var Concrete\Core\File\Importer $instance */
            return $instance->getErrorMessage($code);
        }

        /**
        * @return string
        */
        public function generatePrefix()
        {
            /** @var Concrete\Core\File\Importer $instance */
            return $instance->generatePrefix();
        }

        /**
        * Imports a local file into the system. The file must be added to this path
        * somehow. That's what happens in tools/files/importers/.
        * If a $fr (FileRecord) object is passed, we assign the newly imported FileVersion
        * object to that File. If not, we make a new filerecord.
        * @param string $pointer path to file
        * @param string|bool $filename
        * @param ConcreteFile|bool $fr
        * @return number Error Code | \Concrete\Core\File\Version
        */
        public function import($pointer, $filename = false, $fr = false)
        {
            /** @var Concrete\Core\File\Importer $instance */
            return $instance->import($pointer, $filename, $fr);
        }

        /**
        * Imports a file in the default file storage location's incoming directory
        * @param string $filename
        * @param ConcreteFile|bool $fr
        * @return number Error Code | \Concrete\Core\File\Version
        */
        public function importIncomingFile($filename, $fr = false)
        {
            /** @var Concrete\Core\File\Importer $instance */
            return $instance->importIncomingFile($filename, $fr);
        }

    }

    class FileList extends \Concrete\Core\File\FileList
    {

        /** @var \Concrete\Core\File\FileList */
        protected static $instance;

        protected function getAttributeKeyClassName()
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->getAttributeKeyClassName();
        }

        public function setPermissionsChecker(Closure $checker)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->setPermissionsChecker($checker);
        }

        public function ignorePermissions()
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->ignorePermissions();
        }

        public function createQuery()
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->createQuery();
        }

        public function getTotalResults()
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->getTotalResults();
        }

        protected function createPaginationObject()
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->createPaginationObject();
        }

        /**
        * @param $queryRow
        * @return \Concrete\Core\File\File
        */
        public function getResult($queryRow)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->getResult($queryRow);
        }

        public function checkPermissions($mixed)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->checkPermissions($mixed);
        }

        public function filterByType($type)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterByType($type);
        }

        public function filterByExtension($extension)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterByExtension($extension);
        }

        /**
        * Filters by "keywords" (which searches everything including filenames,
        * title, users who uploaded the file, tags)
        */
        public function filterByKeywords($keywords)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterByKeywords($keywords);
        }

        public function filterBySet($fs)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterBySet($fs);
        }

        public function filterByNoSet()
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterByNoSet();
        }

        /**
        * Filters the file list by file size (in kilobytes)
        */
        public function filterBySize($from, $to)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterBySize($from, $to);
        }

        /**
        * Filters by public date
        * @param string $date
        */
        public function filterByDateAdded($date, $comparison = "=")
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterByDateAdded($date, $comparison);
        }

        public function filterByOriginalPageID($ocID)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterByOriginalPageID($ocID);
        }

        /**
        * filters a FileList by the uID of the approving User
        * @param int $uID
        * @return void
        */
        public function filterByApproverUserID($uID)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterByApproverUserID($uID);
        }

        /**
        * filters a FileList by the uID of the owning User
        * @param int $uID
        * @return void
        * @since 5.4.1.1+
        */
        public function filterByAuthorUserID($uID)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterByAuthorUserID($uID);
        }

        /**
        * Filters by "tags" only.
        */
        public function filterByTags($tags)
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->filterByTags($tags);
        }

        /**
        * Sorts by filename in ascending order.
        */
        public function sortByFilenameAscending()
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->sortByFilenameAscending();
        }

        /**
        * Sorts by file set display order in ascending order.
        */
        public function sortByFileSetDisplayOrder()
        {
            /** @var Concrete\Core\File\FileList $instance */
            return $instance->sortByFileSetDisplayOrder();
        }

        /**
        * Filters by a attribute.
        */
        public function filterByAttribute($handle, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Search\ItemList\Database\AttributedItemList $instance */
            return $instance->filterByAttribute($handle, $value, $comparison);
        }

        /**
        * @param StickyRequest $request
        */
        public function setupAutomaticSorting(Concrete\Core\Search\StickyRequest $request = null)
        {
            /** @var Concrete\Core\Search\ItemList\Database\AttributedItemList $instance */
            return $instance->setupAutomaticSorting($request);
        }

        /**
        * @param \Doctrine\DBAL\Query\QueryBuilder $query
        * @return \Doctrine\DBAL\Query\QueryBuilder
        */
        public function finalizeQuery(Doctrine\DBAL\Query\QueryBuilder $query)
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->finalizeQuery($query);
        }

        public function getQueryObject()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->getQueryObject();
        }

        public function deliverQueryObject()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->deliverQueryObject();
        }

        public function executeGetResults()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->executeGetResults();
        }

        public function debugStart()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->debugStart();
        }

        public function debugStop()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->debugStop();
        }

        protected function executeSortBy($column, $direction = "asc")
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->executeSortBy($column, $direction);
        }

        /**
        * @deprecated
        */
        public function filter($field, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->filter($field, $value, $comparison);
        }

        public function debug()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->debug();
        }

        public function isDebugged()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->isDebugged();
        }

        public function sortBy($field, $direction = "asc")
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->sortBy($field, $direction);
        }

        /** Returns a full array of results. */
        public function getResults()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getResults();
        }

        public function getActiveSortColumn()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getActiveSortColumn();
        }

        public function isActiveSortColumn($field)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->isActiveSortColumn($field);
        }

        public function disableAutomaticSorting()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->disableAutomaticSorting();
        }

        public function getSortClassName($column)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getSortClassName($column);
        }

        public function getSortURL($column, $dir = "asc", $url = false)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getSortURL($column, $dir, $url);
        }

        public function getActiveSortDirection()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getActiveSortDirection();
        }

        public function getQuerySortColumnParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQuerySortColumnParameter();
        }

        public function getQueryPaginationPageParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQueryPaginationPageParameter();
        }

        public function getQuerySortDirectionParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQuerySortDirectionParameter();
        }

        public function setItemsPerPage($itemsPerPage)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->setItemsPerPage($itemsPerPage);
        }

        /**
        * @return \Concrete\Core\Search\Pagination\Pagination|\Concrete\Core\Search\Pagination\PermissionablePagination
        */
        public function getPagination()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getPagination();
        }

        /**
        * @deprecated
        */
        public function get()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->get();
        }

    }

    /**
    * @deprecated
    */
    class FilePermissions extends \Concrete\Core\Legacy\FilePermissions
    {

        /** @var \Concrete\Core\Legacy\FilePermissions */
        protected static $instance;

        public static function getGlobal()
        {
            return Concrete\Core\Legacy\FilePermissions::getGlobal();
        }

    }

    class FileSet extends \Concrete\Core\File\Set\Set
    {

        /** @var \Concrete\Core\File\Set\Set */
        protected static $instance;

        /**
        * Returns an object mapping to the global file set, fsID = 0.
        * This is really only used for permissions mapping
        */
        public static function getGlobal()
        {
            return Concrete\Core\File\Set\Set::getGlobal();
        }

        public static function getMySets($u = false)
        {
            return Concrete\Core\File\Set\Set::getMySets($u);
        }

        /**
        * Creats a new fileset if set doesn't exists
        *
        * If we find a multiple groups with the same properties,
        * we return an array containing each group
        *
        * @param string $fs_name
        * @param int    $fs_type
        * @param int    $fs_uid
        * @return Mixed
        *
        * Dev Note: This will create duplicate sets with the same name if a set exists owned by another user!!!
        */
        public static function createAndGetSet($fs_name, $fs_type, $fs_uid = false)
        {
            return Concrete\Core\File\Set\Set::createAndGetSet($fs_name, $fs_type, $fs_uid);
        }

        /**
        * Get a file set object by a file set's id
        *
        * @param int $fsID
        * @return FileSet
        */
        public static function getByID($fsID)
        {
            return Concrete\Core\File\Set\Set::getByID($fsID);
        }

        /**
        * Adds a file set
        */
        public static function add($setName, $fsOverrideGlobalPermissions = 0, $u = false, $type = self::TYPE_PUBLIC)
        {
            return Concrete\Core\File\Set\Set::add($setName, $fsOverrideGlobalPermissions, $u, $type);
        }

        /**
        * Static method to return an array of File objects by the set id
        *
        * @param  int $fsID
        * @return array
        */
        public static function getFilesBySetID($fsID)
        {
            return Concrete\Core\File\Set\Set::getFilesBySetID($fsID);
        }

        /**
        * Static method to return an array of File objects by the set name
        *
        * @param  string   $fsName
        * @param  int|bool $uID
        * @return array
        */
        public static function getFilesBySetName($fsName, $uID = false)
        {
            return Concrete\Core\File\Set\Set::getFilesBySetName($fsName, $uID);
        }

        /**
        * Get a file set object by a file name
        *
        * @param  string   $fsName
        * @param  int|bool $uID
        * @return FileSet
        */
        public static function getByName($fsName, $uID = false)
        {
            return Concrete\Core\File\Set\Set::getByName($fsName, $uID);
        }

        /**
        * Returns an array of File objects from the current set
        *
        * @return array
        */
        public function getFiles()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getFiles();
        }

        public function getFileSetUserID()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getFileSetUserID();
        }

        public function getFileSetType()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getFileSetType();
        }

        public function getSavedSearches()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getSavedSearches();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function getFileSetID()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getFileSetID();
        }

        public function updateFileSetDisplayOrder($files)
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->updateFileSetDisplayOrder($files);
        }

        public function overrideGlobalPermissions()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->overrideGlobalPermissions();
        }

        public function getFileSetName()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getFileSetName();
        }

        /**
        * Updates a file set.
        */
        public function update($setName, $fsOverrideGlobalPermissions = 0)
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->update($setName, $fsOverrideGlobalPermissions);
        }

        /**
        * Adds the file to the set
        *
        * @param type $fID //accepts an ID or a File object
        * @return object
        */
        public function addFileToSet($f_id)
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->addFileToSet($f_id);
        }

        public function getSavedSearchRequest()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getSavedSearchRequest();
        }

        public function getSavedSearchColumns()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->getSavedSearchColumns();
        }

        public function removeFileFromSet($f_id)
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->removeFileFromSet($f_id);
        }

        public function hasFileID($f_id)
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->hasFileID($f_id);
        }

        public function delete()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->delete();
        }

        public function acquireBaseFileSetPermissions()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->acquireBaseFileSetPermissions();
        }

        public function resetPermissions()
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->resetPermissions();
        }

        public function assignPermissions($userOrGroup, $permissions = array(), $accessType = Concrete\Core\Permission\Key\FileSetKey::ACCESS_TYPE_INCLUDE)
        {
            /** @var Concrete\Core\File\Set\Set $instance */
            return $instance->assignPermissions($userOrGroup, $permissions, $accessType);
        }

    }

    /**
    * @Entity
    * @Table(name="FileVersions")
    */
    class FileVersion extends \Concrete\Core\File\Version
    {

        /** @var \Concrete\Core\File\Version */
        protected static $instance;

        public static function add(Concrete\Core\File\File $file, $filename, $prefix, $data = array())
        {
            return Concrete\Core\File\Version::add($file, $filename, $prefix, $data);
        }

        public static function cleanTags($tagsStr)
        {
            return Concrete\Core\File\Version::cleanTags($tagsStr);
        }

        public function getPrefix()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getPrefix();
        }

        public function isApproved()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->isApproved();
        }

        public function getTagsList()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getTagsList();
        }

        public function getTags()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getTags();
        }

        public function setAttribute($ak, $value)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->setAttribute($ak, $value);
        }

        /**
        * returns the File object associated with this FileVersion object
        *
        * @return \File
        */
        public function getFile()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getFile();
        }

        public function setFile(Concrete\Core\File\File $file)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->setFile($file);
        }

        public function clearAttribute($ak)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->clearAttribute($ak);
        }

        public function getAttributeValueObject($ak, $createIfNotFound = false)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getAttributeValueObject($ak, $createIfNotFound);
        }

        public function getFileID()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getFileID();
        }

        public function getFileVersionID()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getFileVersionID();
        }

        /**
        * Removes a version of a file. Note, does NOT remove the file because we don't know where the file might elsewhere be used/referenced.
        */
        public function delete($deleteFilesAndThumbnails = false)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->delete($deleteFilesAndThumbnails);
        }

        /**
        * Deletes the thumbnail for the particular thumbnail type.
        */
        public function deleteThumbnail($type)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->deleteThumbnail($type);
        }

        /**
        * Returns an abstracted File object for the resource. NOT a concrete5 file object.
        *
        * @return \Concrete\Flysystem\File
        */
        public function getFileResource()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getFileResource();
        }

        public function getMimeType()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getMimeType();
        }

        public function getSize()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getSize();
        }

        public function getFullSize()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getFullSize();
        }

        public function getAuthorName()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getAuthorName();
        }

        public function getAuthorUserID()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getAuthorUserID();
        }

        /**
        * Gets the date a file version was added
        *
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getDateAdded()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getDateAdded();
        }

        public function getExtension()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getExtension();
        }

        /**
        * Takes the current value of the file version and makes a new one with the same values
        */
        public function duplicate()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->duplicate();
        }

        public function deny()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->deny();
        }

        protected function save($flush = true)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->save($flush);
        }

        public function getType()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getType();
        }

        public function getTypeObject()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getTypeObject();
        }

        /**
        * Returns an array containing human-readable descriptions of everything that happened in this version
        */
        public function getVersionLogComments()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getVersionLogComments();
        }

        public function updateTitle($title)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->updateTitle($title);
        }

        public function logVersionUpdate($updateTypeID, $updateTypeAttributeID = 0)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->logVersionUpdate($updateTypeID, $updateTypeAttributeID);
        }

        public function updateTags($tags)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->updateTags($tags);
        }

        public function updateDescription($descr)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->updateDescription($descr);
        }

        public function updateFile($filename, $prefix)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->updateFile($filename, $prefix);
        }

        public function approve()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->approve();
        }

        /**
        * Return the contents of a file
        */
        public function getFileContents()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getFileContents();
        }

        /**
        * Returns a url that can be used to download a file, will force the download of all file types, even if your browser can display them.
        */
        public function getForceDownloadURL()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getForceDownloadURL();
        }

        /**
        * Forces the download of a file.
        *
        * @return void
        */
        public function forceDownload()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->forceDownload();
        }

        public function getFileName()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getFileName();
        }

        public function getRelativePath()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getRelativePath();
        }

        public function getThumbnails()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getThumbnails();
        }

        /**
        * Gets an attribute for the file. If "nice mode" is set, we display it nicely
        * for use in the file attributes table
        */
        public function getAttribute($ak, $mode = false)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getAttribute($ak, $mode);
        }

        public function rescanThumbnails()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->rescanThumbnails();
        }

        /**
        * @deprecated
        * @param $level
        * @return mixed
        */
        public function hasThumbnail($level)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->hasThumbnail($level);
        }

        public function getDetailThumbnailImage()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getDetailThumbnailImage();
        }

        public function getThumbnailURL($type)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getThumbnailURL($type);
        }

        /**
        * Returns a full URL to the file on disk
        */
        public function getURL()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getURL();
        }

        /**
        * Returns a URL that can be used to download the file. This passes through the download_file single page.
        */
        public function getDownloadURL()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getDownloadURL();
        }

        /**
        * Responsible for taking a particular version of a file and rescanning all its attributes
        * This will run any type-based import routines, and store those attributes, generate thumbnails,
        * etc...
        */
        public function refreshAttributes($firstRun = false)
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->refreshAttributes($firstRun);
        }

        public function getTitle()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getTitle();
        }

        /**
        * Return a representation of the current FileVersion object as something easily serializable.
        */
        public function getJSONObject()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getJSONObject();
        }

        /**
        * Checks current viewers for this type and returns true if there is a viewer for this type, false if not
        */
        public function canView()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->canView();
        }

        public function canEdit()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->canEdit();
        }

        public function getGenericTypeText()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getGenericTypeText();
        }

        public function getDescription()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getDescription();
        }

        public function getListingThumbnailImage()
        {
            /** @var Concrete\Core\File\Version $instance */
            return $instance->getListingThumbnailImage();
        }

    }

    class GlobalArea extends \Concrete\Core\Area\GlobalArea
    {

        /** @var \Concrete\Core\Area\GlobalArea */
        protected static $instance;

        public function isGlobalArea()
        {
            /** @var Concrete\Core\Area\GlobalArea $instance */
            return $instance->isGlobalArea();
        }

        public function create($c, $arHandle)
        {
            /** @var Concrete\Core\Area\GlobalArea $instance */
            return $instance->create($c, $arHandle);
        }

        public function getAreaDisplayName()
        {
            /** @var Concrete\Core\Area\GlobalArea $instance */
            return $instance->getAreaDisplayName();
        }

        public function getTotalBlocksInArea()
        {
            /** @var Concrete\Core\Area\GlobalArea $instance */
            return $instance->getTotalBlocksInArea();
        }

        protected function getGlobalAreaStackObject()
        {
            /** @var Concrete\Core\Area\GlobalArea $instance */
            return $instance->getGlobalAreaStackObject();
        }

        public function getTotalBlocksInAreaEditMode()
        {
            /** @var Concrete\Core\Area\GlobalArea $instance */
            return $instance->getTotalBlocksInAreaEditMode();
        }

        public function getAreaBlocks()
        {
            /** @var Concrete\Core\Area\GlobalArea $instance */
            return $instance->getAreaBlocks();
        }

        public function display()
        {
            /** @var Concrete\Core\Area\GlobalArea $instance */
            return $instance->display();
        }

        /**
        * Note that this function does not delete the global area's stack.
        * You probably want to call the "delete" method of the Stack model instead.
        */
        public static function deleteByName($arHandle)
        {
            return Concrete\Core\Area\GlobalArea::deleteByName($arHandle);
        }

        public function setAreaDisplayName($arDisplayName)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setAreaDisplayName($arDisplayName);
        }

        /**
        * Returns whether or not controls are to be displayed
        * @return bool
        */
        public function showControls()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->showControls();
        }

        public function forceControlsToDisplay()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->forceControlsToDisplay();
        }

        public function setAreaGridMaximumColumns($cspan)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setAreaGridMaximumColumns($cspan);
        }

        public function getAreaGridMaximumColumns()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaGridMaximumColumns();
        }

        final public function enableGridContainer()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->enableGridContainer();
        }

        public function isGridContainerEnabled()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->isGridContainerEnabled();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        /**
        * returns the Collection's cID
        * @return int
        */
        public function getCollectionID()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getCollectionID();
        }

        /**
        * returns the Collection object for the current Area
        * @return Collection
        */
        public function getAreaCollectionObject()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaCollectionObject();
        }

        /**
        * returns the arID of the current area
        * @return int
        */
        public function getAreaID()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaID();
        }

        /**
        * returns the handle for the current area
        * @return string
        */
        public function getAreaHandle()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaHandle();
        }

        /**
        * check if the area has permissions that override the page's permissions
        * @return boolean
        */
        public function overrideCollectionPermissions()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->overrideCollectionPermissions();
        }

        /**
        * @return int
        */
        public function getAreaCollectionInheritID()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaCollectionInheritID();
        }

        /**
        * Sets the total number of blocks an area allows. Does not limit by type.
        * @param int $num
        * @return void
        */
        public function setBlockLimit($num)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setBlockLimit($num);
        }

        /**
        * disables controls for the current area
        * @return void
        */
        public function disableControls()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->disableControls();
        }

        /**
        * gets the maximum allowed number of blocks, -1 if unlimited
        * @return int
        */
        public function getMaximumBlocks()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getMaximumBlocks();
        }

        /**
        *
        * @return string
        */
        public function getAreaUpdateAction($task = "update", $alternateHandler = null)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaUpdateAction($task, $alternateHandler);
        }

        public function refreshCache($c)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->refreshCache($c);
        }

        /**
        * Gets the Area object for the given page and area handle
        * @param Page|Collection $c
        * @param string $arHandle
        * @param int|null $arIsGlobal
        * @return Area
        */
        final public static function get(&$c, $arHandle)
        {
            return Concrete\Core\Area\Area::get($c, $arHandle);
        }

        public static function getAreaHandleFromID($arID)
        {
            return Concrete\Core\Area\Area::getAreaHandleFromID($arID);
        }

        /**
        * Get all of the blocks within the current area for a given page
        * @param Page|Collection $c
        * @return Block[]
        */
        public function getAreaBlocksArray($c = false)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getAreaBlocksArray($c);
        }

        /**
        * gets a list of all areas - no relation to the current page or area object
        * possibly could be set as a static method??
        * @return array
        */
        public function getHandleList()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getHandleList();
        }

        public function getListOnPage(Concrete\Core\Page\Page $c)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->getListOnPage($c);
        }

        /**
        * This function removes all permissions records for the current Area
        * and sets it to inherit from the Page permissions
        * @return void
        */
        public function revertToPagePermissions()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->revertToPagePermissions();
        }

        /**
        * Rescans the current Area's permissions ensuring that it's enheriting permissions properly up the chain
        * @return void
        */
        public function rescanAreaPermissionsChain()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->rescanAreaPermissionsChain();
        }

        /**
        * works a lot like rescanAreaPermissionsChain() but it works down. This is typically only
        * called when we update an area to have specific permissions, and all areas that are on pagesbelow it with the same
        * handle, etc... should now inherit from it.
        * @return void
        */
        public function rescanSubAreaPermissions($cIDToCheck = null)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->rescanSubAreaPermissions($cIDToCheck);
        }

        /**
        * similar to rescanSubAreaPermissions, but for those who have setup their pages to inherit master collection permissions
        * @see Area::rescanSubAreaPermissions()
        * @return void
        */
        public function rescanSubAreaPermissionsMasterCollection($masterCollection)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->rescanSubAreaPermissionsMasterCollection($masterCollection);
        }

        public static function getOrCreate($c, $arHandle)
        {
            return Concrete\Core\Area\Area::getOrCreate($c, $arHandle);
        }

        public function load($c)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->load($c);
        }

        /**
        * Exports the area to content format
        * @todo need more documentation export?
        */
        public function export($p, $page)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->export($p, $page);
        }

        /**
        * Specify HTML to automatically print before blocks contained within the area
        * @param string $html
        * @return void
        */
        public function setBlockWrapperStart($html)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setBlockWrapperStart($html);
        }

        /**
        * Set HTML that automatically prints after any blocks contained within the area
        * @param string $html
        * @return void
        */
        public function setBlockWrapperEnd($html)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setBlockWrapperEnd($html);
        }

        public function overridePagePermissions()
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->overridePagePermissions();
        }

        /**
        * @deprecated
        * This no longer functions. This functionality is now located at the theme level.
        * sets a custom block template for blocks of a type specified by the btHandle
        * @param string $btHandle handle for the block type
        * @param string $view string identifying the block template ex: 'templates/breadcrumb.php'
        */
        public function setCustomTemplate($btHandle, $view)
        {
            /** @var Concrete\Core\Area\Area $instance */
            return $instance->setCustomTemplate($btHandle, $view);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class Group extends \Concrete\Core\User\Group\Group
    {

        /** @var \Concrete\Core\User\Group\Group */
        protected static $instance;

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        /**
        * Takes the numeric id of a group and returns a group object
        * @param string $gID
        * @return Group
        */
        public static function getByID($gID)
        {
            return Concrete\Core\User\Group\Group::getByID($gID);
        }

        /**
        * Takes the name of a group and returns a group object
        * @param string $gName
        * @return Group
        */
        public static function getByName($gName)
        {
            return Concrete\Core\User\Group\Group::getByName($gName);
        }

        /**
        * @param string $gPath The group path
        * @return Group
        */
        public static function getByPath($gPath)
        {
            return Concrete\Core\User\Group\Group::getByPath($gPath);
        }

        public function getGroupMembers()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupMembers();
        }

        public function getGroupMemberIDs()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupMemberIDs();
        }

        public function setPermissionsForObject($obj)
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->setPermissionsForObject($obj);
        }

        public function getGroupMembersNum()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupMembersNum();
        }

        /**
        * Deletes a group
        * @return void
        */
        public function delete()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->delete();
        }

        public function rescanGroupPath()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->rescanGroupPath();
        }

        public function rescanGroupPathRecursive()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->rescanGroupPathRecursive();
        }

        public function inGroup()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->inGroup();
        }

        public function getGroupDateTimeEntered($user)
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupDateTimeEntered($user);
        }

        public function getGroupID()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupID();
        }

        public function getGroupName()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupName();
        }

        public function getGroupPath()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupPath();
        }

        public function getParentGroups()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getParentGroups();
        }

        public function getChildGroups()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getChildGroups();
        }

        public function getParentGroup()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getParentGroup();
        }

        public function getGroupDisplayName($includeHTML = true)
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupDisplayName($includeHTML);
        }

        public function getGroupDescription()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupDescription();
        }

        /**
        * Gets the group start date
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getGroupStartDate()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupStartDate();
        }

        /**
        * Gets the group end date
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getGroupEndDate()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupEndDate();
        }

        public function isGroupBadge()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->isGroupBadge();
        }

        public function getGroupBadgeDescription()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupBadgeDescription();
        }

        public function getGroupBadgeCommunityPointValue()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupBadgeCommunityPointValue();
        }

        public function getGroupBadgeImageID()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupBadgeImageID();
        }

        public function isGroupAutomated()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->isGroupAutomated();
        }

        public function checkGroupAutomationOnRegister()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->checkGroupAutomationOnRegister();
        }

        public function checkGroupAutomationOnLogin()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->checkGroupAutomationOnLogin();
        }

        public function checkGroupAutomationOnJobRun()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->checkGroupAutomationOnJobRun();
        }

        public function getGroupAutomationController()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupAutomationController();
        }

        public function getGroupAutomationControllerClass()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupAutomationControllerClass();
        }

        public function getGroupBadgeImageObject()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupBadgeImageObject();
        }

        public function isGroupExpirationEnabled()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->isGroupExpirationEnabled();
        }

        public function getGroupExpirationMethod()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupExpirationMethod();
        }

        public function getGroupExpirationDateTime()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupExpirationDateTime();
        }

        public function getGroupExpirationAction()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupExpirationAction();
        }

        public function getGroupExpirationInterval()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupExpirationInterval();
        }

        public function getGroupExpirationIntervalDays()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupExpirationIntervalDays();
        }

        public function getGroupExpirationIntervalHours()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupExpirationIntervalHours();
        }

        public function getGroupExpirationIntervalMinutes()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getGroupExpirationIntervalMinutes();
        }

        public function isUserExpired(Concrete\Core\User\User $u)
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->isUserExpired($u);
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getPackageHandle();
        }

        public function update($gName, $gDescription)
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->update($gName, $gDescription);
        }

        /** Creates a new user group.
        * @param string $gName
        * @param string $gDescription
        * @return Group
        */
        public static function add($gName, $gDescription, $parentGroup = false, $pkg = null, $gID = null)
        {
            return Concrete\Core\User\Group\Group::add($gName, $gDescription, $parentGroup, $pkg, $gID);
        }

        public static function getBadges()
        {
            return Concrete\Core\User\Group\Group::getBadges();
        }

        protected function getAutomationControllers($column, $excludeUser = false)
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->getAutomationControllers($column, $excludeUser);
        }

        public static function getAutomatedOnRegisterGroupControllers($u = false)
        {
            return Concrete\Core\User\Group\Group::getAutomatedOnRegisterGroupControllers($u);
        }

        public static function getAutomatedOnLoginGroupControllers($u = false)
        {
            return Concrete\Core\User\Group\Group::getAutomatedOnLoginGroupControllers($u);
        }

        public static function getAutomatedOnJobRunGroupControllers()
        {
            return Concrete\Core\User\Group\Group::getAutomatedOnJobRunGroupControllers();
        }

        public function clearBadgeOptions()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->clearBadgeOptions();
        }

        public function clearAutomationOptions()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->clearAutomationOptions();
        }

        public function removeGroupExpiration()
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->removeGroupExpiration();
        }

        public function setBadgeOptions($gBadgeFID, $gBadgeDescription, $gBadgeCommunityPointValue)
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->setBadgeOptions($gBadgeFID, $gBadgeDescription, $gBadgeCommunityPointValue);
        }

        public function setAutomationOptions($gCheckAutomationOnRegister, $gCheckAutomationOnLogin, $gCheckAutomationOnJobRun)
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->setAutomationOptions($gCheckAutomationOnRegister, $gCheckAutomationOnLogin, $gCheckAutomationOnJobRun);
        }

        public function setGroupExpirationByDateTime($datetime, $action)
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->setGroupExpirationByDateTime($datetime, $action);
        }

        public function setGroupExpirationByInterval($days, $hours, $minutes, $action)
        {
            /** @var Concrete\Core\User\Group\Group $instance */
            return $instance->setGroupExpirationByInterval($days, $hours, $minutes, $action);
        }

        public static function exportTranslations()
        {
            return Concrete\Core\User\Group\Group::exportTranslations();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class GroupList extends \Concrete\Core\User\Group\GroupList
    {

        /** @var \Concrete\Core\User\Group\GroupList */
        protected static $instance;

        public function includeAllGroups()
        {
            /** @var Concrete\Core\User\Group\GroupList $instance */
            return $instance->includeAllGroups();
        }

        /**
        * Filters keyword fields by keywords (including name and description).
        * @param $keywords
        */
        public function filterByKeywords($keywords)
        {
            /** @var Concrete\Core\User\Group\GroupList $instance */
            return $instance->filterByKeywords($keywords);
        }

        public function filterByExpirable()
        {
            /** @var Concrete\Core\User\Group\GroupList $instance */
            return $instance->filterByExpirable();
        }

        /**
        * Only return groups the user has the ability to assign.
        */
        public function filterByAssignable()
        {
            /** @var Concrete\Core\User\Group\GroupList $instance */
            return $instance->filterByAssignable();
        }

        public function filterByUserID($uID)
        {
            /** @var Concrete\Core\User\Group\GroupList $instance */
            return $instance->filterByUserID($uID);
        }

        public function createQuery()
        {
            /** @var Concrete\Core\User\Group\GroupList $instance */
            return $instance->createQuery();
        }

        public function finalizeQuery(Doctrine\DBAL\Query\QueryBuilder $query)
        {
            /** @var Concrete\Core\User\Group\GroupList $instance */
            return $instance->finalizeQuery($query);
        }

        /**
        * The total results of the query
        * @return int
        */
        public function getTotalResults()
        {
            /** @var Concrete\Core\User\Group\GroupList $instance */
            return $instance->getTotalResults();
        }

        /**
        * Gets the pagination object for the query.
        * @return Pagination
        */
        protected function createPaginationObject()
        {
            /** @var Concrete\Core\User\Group\GroupList $instance */
            return $instance->createPaginationObject();
        }

        /**
        * @param $queryRow
        * @return \Concrete\Core\User\Group\Group
        */
        public function getResult($queryRow)
        {
            /** @var Concrete\Core\User\Group\GroupList $instance */
            return $instance->getResult($queryRow);
        }

        public function getQueryObject()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->getQueryObject();
        }

        public function deliverQueryObject()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->deliverQueryObject();
        }

        public function executeGetResults()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->executeGetResults();
        }

        public function debugStart()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->debugStart();
        }

        public function debugStop()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->debugStop();
        }

        protected function executeSortBy($column, $direction = "asc")
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->executeSortBy($column, $direction);
        }

        /**
        * @deprecated
        */
        public function filter($field, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->filter($field, $value, $comparison);
        }

        public function debug()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->debug();
        }

        public function isDebugged()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->isDebugged();
        }

        public function sortBy($field, $direction = "asc")
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->sortBy($field, $direction);
        }

        /** Returns a full array of results. */
        public function getResults()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getResults();
        }

        public function getActiveSortColumn()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getActiveSortColumn();
        }

        public function isActiveSortColumn($field)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->isActiveSortColumn($field);
        }

        public function disableAutomaticSorting()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->disableAutomaticSorting();
        }

        public function getSortClassName($column)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getSortClassName($column);
        }

        public function getSortURL($column, $dir = "asc", $url = false)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getSortURL($column, $dir, $url);
        }

        public function getActiveSortDirection()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getActiveSortDirection();
        }

        public function getQuerySortColumnParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQuerySortColumnParameter();
        }

        public function getQueryPaginationPageParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQueryPaginationPageParameter();
        }

        public function getQuerySortDirectionParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQuerySortDirectionParameter();
        }

        public function setItemsPerPage($itemsPerPage)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->setItemsPerPage($itemsPerPage);
        }

        /**
        * @return \Concrete\Core\Search\Pagination\Pagination|\Concrete\Core\Search\Pagination\PermissionablePagination
        */
        public function getPagination()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getPagination();
        }

        /**
        *
        * @param StickyRequest $request
        */
        public function setupAutomaticSorting(Concrete\Core\Search\StickyRequest $request = null)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->setupAutomaticSorting($request);
        }

        /**
        * @deprecated
        */
        public function get()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->get();
        }

    }

    class GroupSet extends \Concrete\Core\User\Group\GroupSet
    {

        /** @var \Concrete\Core\User\Group\GroupSet */
        protected static $instance;

        public static function getList()
        {
            return Concrete\Core\User\Group\GroupSet::getList();
        }

        public static function getByID($gsID)
        {
            return Concrete\Core\User\Group\GroupSet::getByID($gsID);
        }

        public static function getByName($gsName)
        {
            return Concrete\Core\User\Group\GroupSet::getByName($gsName);
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\User\Group\GroupSet::getListByPackage($pkg);
        }

        public function getGroupSetID()
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->getGroupSetID();
        }

        public function getGroupSetName()
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->getGroupSetName();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->getPackageID();
        }

        /** Returns the display name for this group set (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *	Escape the result in html format (if $format is 'html').
        *	If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getGroupSetDisplayName($format = "html")
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->getGroupSetDisplayName($format);
        }

        public function updateGroupSetName($gsName)
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->updateGroupSetName($gsName);
        }

        public function addGroup(Concrete\Core\User\Group\Group $g)
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->addGroup($g);
        }

        public static function add($gsName, $pkg = false)
        {
            return Concrete\Core\User\Group\GroupSet::add($gsName, $pkg);
        }

        public function clearGroups()
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->clearGroups();
        }

        public function getGroups()
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->getGroups();
        }

        public function contains(Concrete\Core\User\Group\Group $g)
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->contains($g);
        }

        public function delete()
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->delete();
        }

        public function removeGroup(Concrete\Core\User\Group\Group $g)
        {
            /** @var Concrete\Core\User\Group\GroupSet $instance */
            return $instance->removeGroup($g);
        }

        public static function exportTranslations()
        {
            return Concrete\Core\User\Group\GroupSet::exportTranslations();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class GroupSetList extends \Concrete\Core\User\Group\GroupSetList
    {

        /** @var \Concrete\Core\User\Group\GroupSetList */
        protected static $instance;

        public function get()
        {
            /** @var Concrete\Core\User\Group\GroupSetList $instance */
            return $instance->get();
        }

        public function getTotal()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getTotal();
        }

        public function debug($dbg = true)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->debug($dbg);
        }

        protected function setQuery($query)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setQuery($query);
        }

        protected function getQuery()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getQuery();
        }

        public function addToQuery($query)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->addToQuery($query);
        }

        protected function setupAutoSort()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupAutoSort();
        }

        protected function executeBase()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->executeBase();
        }

        protected function setupSortByString()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupSortByString();
        }

        protected function setupAttributeSort()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupAttributeSort();
        }

        /**
        * Adds a filter to this item list
        */
        public function filter($column, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->filter($column, $value, $comparison);
        }

        public function getSearchResultsClass($field)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getSearchResultsClass($field);
        }

        public function sortBy($key, $dir = "asc")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->sortBy($key, $dir);
        }

        public function groupBy($key)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->groupBy($key);
        }

        public function having($column, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->having($column, $value, $comparison);
        }

        public function getSortByURL($column, $dir = "asc", $baseURL = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getSortByURL($column, $dir, $baseURL, $additionalVars);
        }

        protected function setupAttributeFilters($join)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupAttributeFilters($join);
        }

        public function filterByAttribute($column, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->filterByAttribute($column, $value, $comparison);
        }

        public function enableStickySearchRequest($namespace = false)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->enableStickySearchRequest($namespace);
        }

        public function getQueryStringSortVariable()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getQueryStringSortVariable();
        }

        public function getQueryStringSortDirectionVariable()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getQueryStringSortDirectionVariable();
        }

        protected function getStickySearchNameSpace()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getStickySearchNameSpace();
        }

        public function resetSearchRequest($namespace = "")
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->resetSearchRequest($namespace);
        }

        public function addToSearchRequest($key, $value)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->addToSearchRequest($key, $value);
        }

        public function getSearchRequest()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSearchRequest();
        }

        public function setItemsPerPage($num)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setItemsPerPage($num);
        }

        public function getItemsPerPage()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getItemsPerPage();
        }

        public function setItems($items)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setItems($items);
        }

        protected function loadQueryStringPagingVariable()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->loadQueryStringPagingVariable();
        }

        public function setNameSpace($ns)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setNameSpace($ns);
        }

        /**
        * Returns an array of object by "page"
        */
        public function getPage($page = false)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getPage($page);
        }

        protected function setCurrentPage($page = false)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setCurrentPage($page);
        }

        /**
        * Displays summary text about a list
        */
        public function displaySummary($right_content = "")
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->displaySummary($right_content);
        }

        public function isActiveSortColumn($column)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->isActiveSortColumn($column);
        }

        public function getActiveSortColumn()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getActiveSortColumn();
        }

        public function getActiveSortDirection()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getActiveSortDirection();
        }

        public function requiresPaging()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->requiresPaging();
        }

        public function getPagination($url = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getPagination($url, $additionalVars);
        }

        /**
        * Gets paging that works in our new format */
        public function displayPagingV2($script = false, $return = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->displayPagingV2($script, $return, $additionalVars);
        }

        /**
        * Gets standard HTML to display paging */
        public function displayPaging($script = false, $return = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->displayPaging($script, $return, $additionalVars);
        }

        /**
        * Returns an object with properties useful for paging
        */
        public function getSummary()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSummary();
        }

        public function getSortBy()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSortBy();
        }

        public function getSortByDirection()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSortByDirection();
        }

        /**
        * Sets up a multiple columns to search by. Each argument is taken "as-is" (including asc or desc) and concatenated with commas
        * Note that this is overrides any previous sortByMultiple() call, and all sortBy() calls. Alternatively, you can pass a single
        * array with multiple columns to sort by as its values.
        * e.g. $list->sortByMultiple('columna desc', 'columnb asc');
        * or $list->sortByMultiple(array('columna desc', 'columnb asc'));
        */
        public function sortByMultiple()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->sortByMultiple();
        }

    }

    class GroupTree extends \Concrete\Core\Tree\Type\Group
    {

        /** @var \Concrete\Core\Tree\Type\Group */
        protected static $instance;

        /** Returns the standard name for this tree
        * @return string
        */
        public function getTreeName()
        {
            /** @var Concrete\Core\Tree\Type\Group $instance */
            return $instance->getTreeName();
        }

        /** Returns the display name for this tree (localized and escaped accordingly to $format)
        * @param  string $format = 'html' Escape the result in html format (if $format is 'html'). If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getTreeDisplayName($format = "html")
        {
            /** @var Concrete\Core\Tree\Type\Group $instance */
            return $instance->getTreeDisplayName($format);
        }

        public static function get()
        {
            return Concrete\Core\Tree\Type\Group::get();
        }

        public static function importDetails(SimpleXMLElement $sx)
        {
            return Concrete\Core\Tree\Type\Group::importDetails($sx);
        }

        public function exportDetails(SimpleXMLElement $sx)
        {
            /** @var Concrete\Core\Tree\Type\Group $instance */
            return $instance->exportDetails($sx);
        }

        protected function deleteDetails()
        {
            /** @var Concrete\Core\Tree\Type\Group $instance */
            return $instance->deleteDetails();
        }

        public static function add()
        {
            return Concrete\Core\Tree\Type\Group::add();
        }

        protected function loadDetails()
        {
            /** @var Concrete\Core\Tree\Type\Group $instance */
            return $instance->loadDetails();
        }

        public static function ensureGroupNodes()
        {
            return Concrete\Core\Tree\Type\Group::ensureGroupNodes();
        }

        public function setSelectedTreeNodeIDs($nodeIDs)
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->setSelectedTreeNodeIDs($nodeIDs);
        }

        public function getSelectedTreeNodeIDs()
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->getSelectedTreeNodeIDs();
        }

        public function getTreeTypeID()
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->getTreeTypeID();
        }

        public function getTreeTypeObject()
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->getTreeTypeObject();
        }

        public function getTreeTypeHandle()
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->getTreeTypeHandle();
        }

        public function export(SimpleXMLElement $sx)
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->export($sx);
        }

        public static function exportList(SimpleXMLElement $sx)
        {
            return Concrete\Core\Tree\Tree::exportList($sx);
        }

        public static function import(SimpleXMLElement $sx)
        {
            return Concrete\Core\Tree\Tree::import($sx);
        }

        public function getTreeID()
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->getTreeID();
        }

        public function getRootTreeNodeObject()
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->getRootTreeNodeObject();
        }

        public function getRootTreeNodeID()
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->getRootTreeNodeID();
        }

        /**
        * Iterates through the segments in the path, to return the node at the proper display. Mostly used for export
        * and import.
        * @param $path
        */
        public function getNodeByDisplayPath($path)
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->getNodeByDisplayPath($path);
        }

        public function setRequest($data)
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->setRequest($data);
        }

        public function delete()
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->delete();
        }

        public function duplicate()
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->duplicate();
        }

        public function getJSON()
        {
            /** @var Concrete\Core\Tree\Tree $instance */
            return $instance->getJSON();
        }

        final public static function getByID($treeID)
        {
            return Concrete\Core\Tree\Tree::getByID($treeID);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class GroupTreeNode extends \Concrete\Core\Tree\Node\Type\Group
    {

        /** @var \Concrete\Core\Tree\Node\Type\Group */
        protected static $instance;

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        public function getTreeNodeGroupID()
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->getTreeNodeGroupID();
        }

        public function getTreeNodeGroupObject()
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->getTreeNodeGroupObject();
        }

        public function getTreeNodeName()
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->getTreeNodeName();
        }

        public function getTreeNodeDisplayName($format = "html")
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->getTreeNodeDisplayName($format);
        }

        public function loadDetails()
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->loadDetails();
        }

        public function move(Concrete\Core\Tree\Node\Node $newParent)
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->move($newParent);
        }

        public static function getTreeNodeByGroupID($gID)
        {
            return Concrete\Core\Tree\Node\Type\Group::getTreeNodeByGroupID($gID);
        }

        public function deleteDetails()
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->deleteDetails();
        }

        public function getTreeNodeJSON()
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->getTreeNodeJSON();
        }

        public function setTreeNodeGroup(Concrete\Core\User\Group\Group $g)
        {
            /** @var Concrete\Core\Tree\Node\Type\Group $instance */
            return $instance->setTreeNodeGroup($g);
        }

        public static function add($group = false, $parent = false)
        {
            return Concrete\Core\Tree\Node\Type\Group::add($group, $parent);
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function getTreeNodeID()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeNodeID();
        }

        public function getTreeNodeParentID()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeNodeParentID();
        }

        public function getTreeNodeParentObject()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeNodeParentObject();
        }

        public function getTreeObject()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeObject();
        }

        public function getTreeID()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeID();
        }

        public function getTreeNodeTypeID()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeNodeTypeID();
        }

        public function getTreeNodeTypeObject()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeNodeTypeObject();
        }

        public function getTreeNodeTypeHandle()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeNodeTypeHandle();
        }

        public function getChildNodes()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getChildNodes();
        }

        public function overrideParentTreeNodePermissions()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->overrideParentTreeNodePermissions();
        }

        public function getTreeNodePermissionsNodeID()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeNodePermissionsNodeID();
        }

        public function getTreeNodeChildCount()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeNodeChildCount();
        }

        /**
        * Transforms a node to another node
        */
        public function transformNode($treeNodeType)
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->transformNode($treeNodeType);
        }

        /**
        * Returns an array of all parents of this tree node
        */
        public function getTreeNodeParentArray()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeNodeParentArray();
        }

        public function selectChildrenNodesByID($nodeID)
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->selectChildrenNodesByID($nodeID);
        }

        public function export(SimpleXMLElement $x)
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->export($x);
        }

        public function duplicate($parent = false)
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->duplicate($parent);
        }

        public function getTreeNodeDisplayPath()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getTreeNodeDisplayPath();
        }

        protected function duplicateChildren(Concrete\Core\Tree\Node\Node $node)
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->duplicateChildren($node);
        }

        public function setTreeNodePermissionsToGlobal()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->setTreeNodePermissionsToGlobal();
        }

        public function setTreeNodePermissionsToOverride()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->setTreeNodePermissionsToOverride();
        }

        public function getAllChildNodeIDs()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->getAllChildNodeIDs();
        }

        public function setTreeNodeTreeID($treeID)
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->setTreeNodeTreeID($treeID);
        }

        protected function rescanChildrenDisplayOrder()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->rescanChildrenDisplayOrder();
        }

        public function saveChildOrder($orderedIDs)
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->saveChildOrder($orderedIDs);
        }

        public function importNode(SimpleXMLElement $sx, $parent = false)
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->importNode($sx, $parent);
        }

        public function importChildren(SimpleXMLElement $sx)
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->importChildren($sx);
        }

        public function populateChildren()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->populateChildren();
        }

        public function populateDirectChildrenOnly()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->populateDirectChildrenOnly();
        }

        public function delete()
        {
            /** @var Concrete\Core\Tree\Node\Node $instance */
            return $instance->delete();
        }

        public static function getByID($treeNodeID)
        {
            return Concrete\Core\Tree\Node\Node::getByID($treeNodeID);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class Job extends \Concrete\Core\Job\Job
    {

        /** @var \Concrete\Core\Job\Job */
        protected static $instance;

        public function getJobHandle()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobHandle();
        }

        public function getJobID()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getPackageHandle();
        }

        public function getJobLastStatusCode()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobLastStatusCode();
        }

        public function didFail()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->didFail();
        }

        public function canUninstall()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->canUninstall();
        }

        public function supportsQueue()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->supportsQueue();
        }

        public static function jobClassLocations()
        {
            return Concrete\Core\Job\Job::jobClassLocations();
        }

        public function getJobDateLastRun()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobDateLastRun();
        }

        public function getJobStatus()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobStatus();
        }

        public function getJobLastStatusText()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobLastStatusText();
        }

        public static function authenticateRequest($auth)
        {
            return Concrete\Core\Job\Job::authenticateRequest($auth);
        }

        public static function generateAuth()
        {
            return Concrete\Core\Job\Job::generateAuth();
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Job\Job::exportList($xml);
        }

        public static function getList($scheduledOnly = false)
        {
            return Concrete\Core\Job\Job::getList($scheduledOnly);
        }

        public function reset()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->reset();
        }

        public function markStarted()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->markStarted();
        }

        public function markCompleted($resultCode = 0, $resultMsg = false)
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->markCompleted($resultCode, $resultMsg);
        }

        public static function getByID($jID = 0)
        {
            return Concrete\Core\Job\Job::getByID($jID);
        }

        public static function getByHandle($jHandle = "")
        {
            return Concrete\Core\Job\Job::getByHandle($jHandle);
        }

        public static function getJobObjByHandle($jHandle = "", $jobData = array())
        {
            return Concrete\Core\Job\Job::getJobObjByHandle($jHandle, $jobData);
        }

        protected static function getClassName($jHandle, $pkgHandle = null)
        {
            return Concrete\Core\Job\Job::getClassName($jHandle, $pkgHandle);
        }

        public static function getAvailableList($includeConcreteDirJobs = 1)
        {
            return Concrete\Core\Job\Job::getAvailableList($includeConcreteDirJobs);
        }

        public function executeJob()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->executeJob();
        }

        public function setJobStatus($jStatus = "ENABLED")
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->setJobStatus($jStatus);
        }

        public static function installByHandle($jHandle = "")
        {
            return Concrete\Core\Job\Job::installByHandle($jHandle);
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Job\Job::getListByPackage($pkg);
        }

        public static function installByPackage($jHandle, $pkg)
        {
            return Concrete\Core\Job\Job::installByPackage($jHandle, $pkg);
        }

        public function install()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->install();
        }

        public function uninstall()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->uninstall();
        }

        /**
        * Removes Job log entries
        */
        public static function clearLog()
        {
            return Concrete\Core\Job\Job::clearLog();
        }

        public function isScheduledForNow()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->isScheduledForNow();
        }

        public function setSchedule($scheduled, $interval, $value)
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->setSchedule($scheduled, $interval, $value);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class JobSet extends \Concrete\Core\Job\Set
    {

        /** @var \Concrete\Core\Job\Set */
        protected static $instance;

        public static function getList()
        {
            return Concrete\Core\Job\Set::getList();
        }

        public static function getByID($jsID)
        {
            return Concrete\Core\Job\Set::getByID($jsID);
        }

        public static function getByName($jsName)
        {
            return Concrete\Core\Job\Set::getByName($jsName);
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Job\Set::getListByPackage($pkg);
        }

        public static function getDefault()
        {
            return Concrete\Core\Job\Set::getDefault();
        }

        public function getJobSetID()
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->getJobSetID();
        }

        public function getJobSetName()
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->getJobSetName();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->getPackageID();
        }

        /** Returns the display name for this job set (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *	Escape the result in html format (if $format is 'html').
        *	If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getJobSetDisplayName($format = "html")
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->getJobSetDisplayName($format);
        }

        public function updateJobSetName($jsName)
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->updateJobSetName($jsName);
        }

        public function addJob(Concrete\Core\Job\Job $j)
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->addJob($j);
        }

        public static function add($jsName, $pkg = false)
        {
            return Concrete\Core\Job\Set::add($jsName, $pkg);
        }

        public function clearJobs()
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->clearJobs();
        }

        public function getJobs()
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->getJobs();
        }

        public function markStarted()
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->markStarted();
        }

        public function contains(Concrete\Core\Job\Job $j)
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->contains($j);
        }

        public function delete()
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->delete();
        }

        public function canDelete()
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->canDelete();
        }

        public function removeJob(Concrete\Core\Job\Job $j)
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->removeJob($j);
        }

        public function isScheduledForNow()
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->isScheduledForNow();
        }

        public function setSchedule($scheduled, $interval, $value)
        {
            /** @var Concrete\Core\Job\Set $instance */
            return $instance->setSchedule($scheduled, $interval, $value);
        }

        public static function exportTranslations()
        {
            return Concrete\Core\Job\Set::exportTranslations();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    /**
    * @deprecated
    */
    class Loader extends \Concrete\Core\Legacy\Loader
    {

        /** @var \Concrete\Core\Legacy\Loader */
        protected static $instance;

        /**
        * @return \Concrete\Core\Database\Connection
        */
        public static function db()
        {
            return Concrete\Core\Legacy\Loader::db();
        }

        public static function helper($service, $pkgHandle = false)
        {
            return Concrete\Core\Legacy\Loader::helper($service, $pkgHandle);
        }

        public static function packageElement($file, $pkgHandle, $args = null)
        {
            return Concrete\Core\Legacy\Loader::packageElement($file, $pkgHandle, $args);
        }

        public static function element($_file, $args = null, $_pkgHandle = null)
        {
            return Concrete\Core\Legacy\Loader::element($_file, $args, $_pkgHandle);
        }

        public static function model($model, $pkgHandle = false)
        {
            return Concrete\Core\Legacy\Loader::model($model, $pkgHandle);
        }

        public static function library($library, $pkgHandle = false)
        {
            return Concrete\Core\Legacy\Loader::library($library, $pkgHandle);
        }

        public static function controller($item)
        {
            return Concrete\Core\Legacy\Loader::controller($item);
        }

    }

    class Localization extends \Concrete\Core\Localization\Localization
    {

        /** @var \Concrete\Core\Localization\Localization */
        protected static $instance;

        public static function getInstance()
        {
            return Concrete\Core\Localization\Localization::getInstance();
        }

        public static function changeLocale($locale)
        {
            return Concrete\Core\Localization\Localization::changeLocale($locale);
        }

        /** Returns the currently active locale
        * @return string
        * @example 'en_US'
        */
        public static function activeLocale()
        {
            return Concrete\Core\Localization\Localization::activeLocale();
        }

        /** Returns the language for the currently active locale
        * @return string
        * @example 'en'
        */
        public static function activeLanguage()
        {
            return Concrete\Core\Localization\Localization::activeLanguage();
        }

        public function setLocale($locale)
        {
            /** @var Concrete\Core\Localization\Localization $instance */
            return $instance->setLocale($locale);
        }

        public function getLocale()
        {
            /** @var Concrete\Core\Localization\Localization $instance */
            return $instance->getLocale();
        }

        public function getActiveTranslateObject()
        {
            /** @var Concrete\Core\Localization\Localization $instance */
            return $instance->getActiveTranslateObject();
        }

        public static function getTranslate()
        {
            return Concrete\Core\Localization\Localization::getTranslate();
        }

        public static function getAvailableInterfaceLanguages()
        {
            return Concrete\Core\Localization\Localization::getAvailableInterfaceLanguages();
        }

        /**
        * Generates a list of all available languages and returns an array like
        * [ "de_DE" => "Deutsch (Deutschland)",
        *   "en_US" => "English (United States)",
        *   "fr_FR" => "Francais (France)"]
        * The result will be sorted by the key.
        * If the $displayLocale is set, the language- and region-names will be returned in that language
        * @param string|null $displayLocale Language of the description.
        *                    Set to null to get each locale name in its own language,
        *                    set to '' to use the current locale,
        *                    set to a specific locale to get the names in that language
        * @return Array An associative Array with locale as the key and description as content
        */
        public static function getAvailableInterfaceLanguageDescriptions($displayLocale = "")
        {
            return Concrete\Core\Localization\Localization::getAvailableInterfaceLanguageDescriptions($displayLocale);
        }

        /**
        * Get the description of a locale consisting of language and region description
        * e.g. "French (France)"
        * @param string $locale Locale that should be described
        * @param string|null $displayLocale Language of the description.
        *                    Set to null to get each locale name in its own language,
        *                    set to '' to use the current locale,
        *                    set to a specific locale to get the names in that language
        * @return string Description of a language
        */
        public static function getLanguageDescription($locale, $displayLocale = "")
        {
            return Concrete\Core\Localization\Localization::getLanguageDescription($locale, $displayLocale);
        }

        /**
        * @return ZendCacheDriver
        */
        protected static function getCache()
        {
            return Concrete\Core\Localization\Localization::getCache();
        }

        /**
        * Clear the translations cache
        */
        public static function clearCache()
        {
            return Concrete\Core\Localization\Localization::clearCache();
        }

    }

    class Marketplace extends \Concrete\Core\Marketplace\Marketplace
    {

        /** @var \Concrete\Core\Marketplace\Marketplace */
        protected static $instance;

        public static function getInstance()
        {
            return Concrete\Core\Marketplace\Marketplace::getInstance();
        }

        public static function downloadRemoteFile($file)
        {
            return Concrete\Core\Marketplace\Marketplace::downloadRemoteFile($file);
        }

        /**
        * Runs through all packages on the marketplace, sees if they're installed here, and updates the available version number for them
        */
        public static function checkPackageUpdates()
        {
            return Concrete\Core\Marketplace\Marketplace::checkPackageUpdates();
        }

        public function getAvailableMarketplaceItems($filterInstalled = true)
        {
            /** @var Concrete\Core\Marketplace\Marketplace $instance */
            return $instance->getAvailableMarketplaceItems($filterInstalled);
        }

        public function getConnectionError()
        {
            /** @var Concrete\Core\Marketplace\Marketplace $instance */
            return $instance->getConnectionError();
        }

        public function getSitePageURL()
        {
            /** @var Concrete\Core\Marketplace\Marketplace $instance */
            return $instance->getSitePageURL();
        }

        public function getMarketplaceFrame($width = "100%", $height = "300", $completeURL = false, $connectMethod = "view")
        {
            /** @var Concrete\Core\Marketplace\Marketplace $instance */
            return $instance->getMarketplaceFrame($width, $height, $completeURL, $connectMethod);
        }

        public function isConnected()
        {
            /** @var Concrete\Core\Marketplace\Marketplace $instance */
            return $instance->isConnected();
        }

        public function hasConnectionError()
        {
            /** @var Concrete\Core\Marketplace\Marketplace $instance */
            return $instance->hasConnectionError();
        }

        public function generateSiteToken()
        {
            /** @var Concrete\Core\Marketplace\Marketplace $instance */
            return $instance->generateSiteToken();
        }

        public function getSiteToken()
        {
            /** @var Concrete\Core\Marketplace\Marketplace $instance */
            return $instance->getSiteToken();
        }

        public function getMarketplacePurchaseFrame($mp, $width = "100%", $height = "530")
        {
            /** @var Concrete\Core\Marketplace\Marketplace $instance */
            return $instance->getMarketplacePurchaseFrame($mp, $width, $height);
        }

    }

    class Package extends \Concrete\Core\Package\Package
    {

        /** @var \Concrete\Core\Package\Package */
        protected static $instance;

        public function getRelativePath()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getRelativePath();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageID();
        }

        public function getPackageName()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageName();
        }

        public function getPackageDescription()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageDescription();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageHandle();
        }

        /**
        * Gets the date the package was added to the system,
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getPackageDateInstalled()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageDateInstalled();
        }

        public function getPackageVersion()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageVersion();
        }

        public function getPackageVersionUpdateAvailable()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageVersionUpdateAvailable();
        }

        public function isPackageInstalled()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->isPackageInstalled();
        }

        public function getChangelogContents()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getChangelogContents();
        }

        /**
        * Returns the currently installed package version.
        * NOTE: This function only returns a value if getLocalUpgradeablePackages() has been called first!
        */
        public function getPackageCurrentlyInstalledVersion()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageCurrentlyInstalledVersion();
        }

        public function getApplicationVersionRequired()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getApplicationVersionRequired();
        }

        public function hasInstallNotes()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->hasInstallNotes();
        }

        public function hasInstallPostScreen()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->hasInstallPostScreen();
        }

        public function allowsFullContentSwap()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->allowsFullContentSwap();
        }

        public function showInstallOptionsScreen()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->showInstallOptionsScreen();
        }

        public static function installDB($xmlFile)
        {
            return Concrete\Core\Package\Package::installDB($xmlFile);
        }

        public static function getClass($pkgHandle)
        {
            return Concrete\Core\Package\Package::getClass($pkgHandle);
        }

        /**
        * Loads package translation files into zend translate
        * @param string $locale = null The identifier of the locale to activate (used to build the language file path). If empty we'll use currently active locale.
        * @param \Zend\I18n\Translator\Translator|string $translate = 'current' The Zend Translator instance that holds the translations (set to 'current' to use the current one)
        */
        public function setupPackageLocalization($locale = null, $translate = "current")
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->setupPackageLocalization($locale, $translate);
        }

        /**
        * Returns an array of package items (e.g. blocks, themes)
        */
        public function getPackageItems()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageItems();
        }

        /** Returns the display name of a category of package items (localized and escaped accordingly to $format)
        * @param string $categoryHandle The category handle
        * @param string $format = 'html' Escape the result in html format (if $format is 'html'). If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public static function getPackageItemsCategoryDisplayName($categoryHandle, $format = "html")
        {
            return Concrete\Core\Package\Package::getPackageItemsCategoryDisplayName($categoryHandle, $format);
        }

        public static function getItemName($item)
        {
            return Concrete\Core\Package\Package::getItemName($item);
        }

        /**
        * Uninstalls the package. Removes any blocks, themes, or pages associated with the package.
        */
        public function uninstall()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->uninstall();
        }

        protected function validateClearSiteContents($options)
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->validateClearSiteContents($options);
        }

        public function swapContent($options)
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->swapContent($options);
        }

        public static function testForInstall($package, $testForAlreadyInstalled = true)
        {
            return Concrete\Core\Package\Package::testForInstall($package, $testForAlreadyInstalled);
        }

        public function mapError($testResults)
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->mapError($testResults);
        }

        public function getPackagePath()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackagePath();
        }

        /**
        * returns a Package object for the given package id, null if not found
        * @param int $pkgID
        * @return Package
        */
        public static function getByID($pkgID)
        {
            return Concrete\Core\Package\Package::getByID($pkgID);
        }

        /**
        * returns a Package object for the given package handle, null if not found
        * @param string $pkgHandle
        * @return Package
        */
        public static function getByHandle($pkgHandle)
        {
            return Concrete\Core\Package\Package::getByHandle($pkgHandle);
        }

        /**
        * Called to enable package specific configuration
        */
        public function registerConfigNamespace()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->registerConfigNamespace();
        }

        /**
        * Get the standard database config liaison
        * @return \Concrete\Core\Config\Repository\Liaison
        */
        public function getConfig()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getConfig();
        }

        /**
        * Get the standard database config liaison
        * @return \Concrete\Core\Config\Repository\Liaison
        */
        public function getDatabaseConfig()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getDatabaseConfig();
        }

        /**
        * Get the standard filesystem config liaison
        * @return \Concrete\Core\Config\Repository\Liaison
        */
        public function getFileConfig()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getFileConfig();
        }

        /**
        * @return Package
        */
        public function install()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->install();
        }

        public function updateAvailableVersionNumber($vNum)
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->updateAvailableVersionNumber($vNum);
        }

        public function upgradeCoreData()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->upgradeCoreData();
        }

        public function upgrade()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->upgrade();
        }

        public static function getInstalledHandles()
        {
            return Concrete\Core\Package\Package::getInstalledHandles();
        }

        public static function getInstalledList()
        {
            return Concrete\Core\Package\Package::getInstalledList();
        }

        /**
        * Returns an array of packages that have newer versions in the local packages directory
        * than those which are in the Packages table. This means they're ready to be upgraded
        */
        public static function getLocalUpgradeablePackages()
        {
            return Concrete\Core\Package\Package::getLocalUpgradeablePackages();
        }

        public static function getRemotelyUpgradeablePackages()
        {
            return Concrete\Core\Package\Package::getRemotelyUpgradeablePackages();
        }

        /**
        * moves the current package's directory to the trash directory renamed with the package handle and a date code.
        */
        public function backup()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->backup();
        }

        /**
        * if a packate was just backed up by this instance of the package object and the packages/package handle directory doesn't exist, this will restore the
        * package from the trash
        */
        public function restore()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->restore();
        }

        public static function getAvailablePackages($filterInstalled = true)
        {
            return Concrete\Core\Package\Package::getAvailablePackages($filterInstalled);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    /**
    * The page object in Concrete encapsulates all the functionality used by a typical page and their contents
    * including blocks, page metadata, page permissions.
    */
    class Page extends \Concrete\Core\Page\Page
    {

        /** @var \Concrete\Core\Page\Page */
        protected static $instance;

        /**
        * @param string $path /path/to/page
        * @param string $version ACTIVE or RECENT
        * @return Page
        */
        public static function getByPath($path, $version = "RECENT")
        {
            return Concrete\Core\Page\Page::getByPath($path, $version);
        }

        /**
        * @param int $cID Collection ID of a page
        * @param string $versionOrig ACTIVE or RECENT
        * @param string $class
        * @return Page
        */
        public static function getByID($cID, $version = "RECENT", $class = "Page")
        {
            return Concrete\Core\Page\Page::getByID($cID, $version, $class);
        }

        /**
        * @access private
        */
        protected function populatePage($cInfo, $where, $cvID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->populatePage($cInfo, $where, $cvID);
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        /**
        * Return a representation of the Page object as something easily serializable.
        */
        public function getJSONObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getJSONObject();
        }

        /**
        * @return PageController
        */
        public function getPageController()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageController();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        /**
        * Is the page in edit mode
        * @return bool
        */
        public function isEditMode()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isEditMode();
        }

        /**
        * Get the package ID for a page (page thats added by a package) (returns 0 if its not in a package)
        * @return int
        */
        public function getPackageID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPackageID();
        }

        /**
        * Get the package handle for a page (page thats added by a package)
        * @return string
        */
        public function getPackageHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPackageHandle();
        }

        /**
        * Returns 1 if the page is in arrange mode
        * @return bool
        */
        public function isArrangeMode()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isArrangeMode();
        }

        /**
        * Forces the page to be checked in if its checked out
        */
        public function forceCheckIn()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->forceCheckIn();
        }

        /**
        * Checks if the page is a dashboard page, returns true if it is
        * @return bool
        */
        public function isAdminArea()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isAdminArea();
        }

        /**
        * Uses a Request object to determine which page to load. queries by path and then
        * by cID
        */
        public static function getFromRequest(Concrete\Core\Http\Request $request)
        {
            return Concrete\Core\Page\Page::getFromRequest($request);
        }

        public function processArrangement($area_id, $moved_block_id, $block_order)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->processArrangement($area_id, $moved_block_id, $block_order);
        }

        /**
        * checks if the page is checked out, if it is return true
        * @return bool
        */
        public function isCheckedOut()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isCheckedOut();
        }

        /**
        * Gets the user that is editing the current page.
        * $return string $name
        */
        public function getCollectionCheckedOutUserName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionCheckedOutUserName();
        }

        /**
        * Checks if the page is checked out by the current user
        * @return bool
        */
        public function isCheckedOutByMe()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isCheckedOutByMe();
        }

        /**
        * Checks if the page is a single page
        * @return bool
        */
        public function isGeneratedCollection()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isGeneratedCollection();
        }

        public function assignPermissions($userOrGroup, $permissions = array(), $accessType = Concrete\Core\Permission\Key\PageKey::ACCESS_TYPE_INCLUDE)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->assignPermissions($userOrGroup, $permissions, $accessType);
        }

        public function removePermissions($userOrGroup, $permissions = array())
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->removePermissions($userOrGroup, $permissions);
        }

        public static function getDrafts()
        {
            return Concrete\Core\Page\Page::getDrafts();
        }

        public function isPageDraft()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isPageDraft();
        }

        public function setController($controller)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setController($controller);
        }

        /**
        * @deprecated
        */
        public function getController()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getController();
        }

        /**
        * @private
        */
        public function assignPermissionSet($px)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->assignPermissionSet($px);
        }

        /**
        * Make an alias to a page
        * @param Collection $c
        * @return int $newCID
        */
        public function addCollectionAlias($c)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->addCollectionAlias($c);
        }

        /**
        * Update the name, link, and to open in a new window for an external link
        * @param string $cName
        * @param string $cLink
        * @param bool $newWindow
        */
        public function updateCollectionAliasExternal($cName, $cLink, $newWindow = 0)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->updateCollectionAliasExternal($cName, $cLink, $newWindow);
        }

        /**
        * Add a new external link
        * @param string $cName
        * @param string $cLink
        * @param bool $newWindow
        * @return int $newCID
        */
        public function addCollectionAliasExternal($cName, $cLink, $newWindow = 0)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->addCollectionAliasExternal($cName, $cLink, $newWindow);
        }

        /**
        * Check if a page is a single page that is in the core (/concrete directory)
        * @return bool
        */
        public function isSystemPage()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isSystemPage();
        }

        /**
        * Gets the icon for a page (also fires the on_page_get_icon event)
        * @return string $icon Path to the icon
        */
        public function getCollectionIcon()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionIcon();
        }

        /**
        * Remove an external link/alias
        * @return int $cIDRedir cID for the original page if the page was an alias
        */
        public function removeThisAlias()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->removeThisAlias();
        }

        public function populateRecursivePages($pages, $pageRow, $cParentID, $level, $includeThisPage = true)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->populateRecursivePages($pages, $pageRow, $cParentID, $level, $includeThisPage);
        }

        public function queueForDeletionSort($a, $b)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->queueForDeletionSort($a, $b);
        }

        public function queueForDuplicationSort($a, $b)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->queueForDuplicationSort($a, $b);
        }

        public function queueForDeletion()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->queueForDeletion();
        }

        public function queueForDeletionRequest()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->queueForDeletionRequest();
        }

        public function queueForDuplication($destination, $includeParent = true)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->queueForDuplication($destination, $includeParent);
        }

        public function export($pageNode, $includePublicDate = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->export($pageNode, $includePublicDate);
        }

        /**
        * Returns the uID for a page that is checked out
        * @return int
        */
        public function getCollectionCheckedOutUserID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionCheckedOutUserID();
        }

        /**
        * Returns the path for the current page
        * @return string
        */
        public function getCollectionPath()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionPath();
        }

        /**
        * Returns the PagePath object for the current page.
        */
        public function getCollectionPathObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionPathObject();
        }

        /**
        * Adds a non-canonical page path to the current page.
        */
        public function addAdditionalPagePath($cPath, $commit = true)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->addAdditionalPagePath($cPath, $commit);
        }

        /**
        * Sets the canonical page path for a page.
        * @return void
        */
        public function setCanonicalPagePath($cPath)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setCanonicalPagePath($cPath);
        }

        public function getAdditionalPagePaths()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getAdditionalPagePaths();
        }

        /**
        * Clears all additional page paths for a page.
        */
        public function clearAdditionalPagePaths()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->clearAdditionalPagePaths();
        }

        /**
        * Returns full url for the current page
        * @return string
        */
        public function getCollectionLink($appendBaseURL = false, $ignoreUrlRewriting = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionLink($appendBaseURL, $ignoreUrlRewriting);
        }

        /**
        * Returns the path for a page from its cID
        * @param int cID
        * @return string $path
        */
        public static function getCollectionPathFromID($cID)
        {
            return Concrete\Core\Page\Page::getCollectionPathFromID($cID);
        }

        /**
        * Returns the uID for a page ownder
        * @return int
        */
        public function getCollectionUserID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionUserID();
        }

        /**
        * Returns the page's handle
        * @return string
        */
        public function getCollectionHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionHandle();
        }

        /**
        * @deprecated
        */
        public function getCollectionTypeName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionTypeName();
        }

        public function getPageTypeName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTypeName();
        }

        /**
        * @deprecated
        */
        public function getCollectionTypeID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionTypeID();
        }

        /**
        * Returns the Collection Type ID
        * @return int
        */
        public function getPageTypeID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTypeID();
        }

        public function getPageTypeObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTypeObject();
        }

        /**
        * Returns the Page Template ID
        * @return int
        */
        public function getPageTemplateID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTemplateID();
        }

        /**
        * Returns the Page Template Object
        * @return PageTemplate
        */
        public function getPageTemplateObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTemplateObject();
        }

        /**
        * Returns the Page Template handle
        * @return string
        */
        public function getPageTemplateHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTemplateHandle();
        }

        /**
        * Returns the Collection Type handle
        * @return string
        */
        public function getPageTypeHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTypeHandle();
        }

        public function getCollectionTypeHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionTypeHandle();
        }

        /**
        * Returns theme id for the collection
        * @return int
        */
        public function getCollectionThemeID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionThemeID();
        }

        /**
        * Check if a block is an alias from a page default
        * @param Block $b
        * @return bool
        */
        public function isBlockAliasedFromMasterCollection($b)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isBlockAliasedFromMasterCollection($b);
        }

        /**
        * Returns Collection's theme object
        * @return PageTheme
        */
        public function getCollectionThemeObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionThemeObject();
        }

        /**
        * Returns the page's name
        * @return string
        */
        public function getCollectionName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionName();
        }

        /**
        * Returns the collection ID for the aliased page (returns 0 unless used on an actual alias)
        * @return int
        */
        public function getCollectionPointerID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionPointerID();
        }

        /**
        * Returns link for the aliased page
        * @return string
        */
        public function getCollectionPointerExternalLink()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionPointerExternalLink();
        }

        /**
        * Returns if the alias opens in a new window
        * @return bool
        */
        public function openCollectionPointerExternalLinkInNewWindow()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->openCollectionPointerExternalLinkInNewWindow();
        }

        /**
        * Checks to see if the page is an alias
        * @return bool
        */
        public function isAlias()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isAlias();
        }

        /**
        * Checks if a page is an external link
        * @return bool
        */
        public function isExternalLink()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isExternalLink();
        }

        /**
        * Get the original cID of a page
        * @return int
        */
        public function getCollectionPointerOriginalID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionPointerOriginalID();
        }

        /**
        * Get the file name of a page (single pages)
        * @return string
        */
        public function getCollectionFilename()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionFilename();
        }

        /**
        * Gets the date a the current version was made public,
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getCollectionDatePublic()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionDatePublic();
        }

        /**
        * Get the description of a page
        * @return string
        */
        public function getCollectionDescription()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionDescription();
        }

        /**
        * Gets the cID of the page's parent
        * @return int
        */
        public function getCollectionParentID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionParentID();
        }

        /**
        * Get the Parent cID from a page by using a cID
        * @param int $cID
        * @return int
        */
        public function getCollectionParentIDFromChildID($cID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionParentIDFromChildID($cID);
        }

        /**
        * Returns an array of this cParentID and aliased parentIDs
        * @return array $cID
        */
        public function getCollectionParentIDs()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionParentIDs();
        }

        /**
        * Checks if a page is a page default
        * @return bool
        */
        public function isMasterCollection()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isMasterCollection();
        }

        /**
        * Gets the template permissions
        * @return string
        */
        public function overrideTemplatePermissions()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->overrideTemplatePermissions();
        }

        /**
        * Gets the position of the page in the sitemap
        * @return int
        */
        public function getCollectionDisplayOrder()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionDisplayOrder();
        }

        /**
        * Set the theme for a page using the page object
        * @param PageTheme $pl
        */
        public function setTheme($pl)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setTheme($pl);
        }

        /**
        * Set the theme for a page using the page object
        * @param PageType $pl
        */
        public function setPageType(Concrete\Core\Page\Type\Type $type = null)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPageType($type);
        }

        /**
        * Set the permissions of sub-collections added beneath this permissions to inherit from the template
        */
        public function setPermissionsInheritanceToTemplate()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPermissionsInheritanceToTemplate();
        }

        /**
        * Set the permissions of sub-collections added beneath this permissions to inherit from the parent
        */
        public function setPermissionsInheritanceToOverride()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPermissionsInheritanceToOverride();
        }

        public function getPermissionsCollectionID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionsCollectionID();
        }

        public function getCollectionInheritance()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionInheritance();
        }

        public function getParentPermissionsCollectionID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getParentPermissionsCollectionID();
        }

        public function getPermissionsCollectionObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionsCollectionObject();
        }

        /**
        * Given the current page's template and page type, we return the master page
        */
        public function getMasterCollectionID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getMasterCollectionID();
        }

        public function getOriginalCollectionID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getOriginalCollectionID();
        }

        public function getNumChildren()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getNumChildren();
        }

        public function getNumChildrenDirect()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getNumChildrenDirect();
        }

        /**
        * Returns the first child of the current page, or null if there is no child
        * @param string $sortColumn
        * @return Page
        */
        public function getFirstChild($sortColumn = "cDisplayOrder asc", $excludeSystemPages = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getFirstChild($sortColumn, $excludeSystemPages);
        }

        public function getCollectionChildrenArray($oneLevelOnly = 0)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionChildrenArray($oneLevelOnly);
        }

        /**
        * Returns the immediate children of the current page.
        */
        public function getCollectionChildren()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionChildren();
        }

        public function _getNumChildren($cID, $oneLevelOnly = 0, $sortColumn = "cDisplayOrder asc")
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->_getNumChildren($cID, $oneLevelOnly, $sortColumn);
        }

        public function canMoveCopyTo($cobj)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->canMoveCopyTo($cobj);
        }

        public function updateCollectionName($name)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->updateCollectionName($name);
        }

        public function hasPageThemeCustomizations()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->hasPageThemeCustomizations();
        }

        public function resetCustomThemeStyles()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->resetCustomThemeStyles();
        }

        public function setCustomStyleObject(Concrete\Core\Page\Theme\Theme $pt, Concrete\Core\StyleCustomizer\Style\ValueList $valueList, $selectedPreset = false, $customCssRecord = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setCustomStyleObject($pt, $valueList, $selectedPreset, $customCssRecord);
        }

        public function getPageWrapperClass()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageWrapperClass();
        }

        public function writePageThemeCustomizations()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->writePageThemeCustomizations();
        }

        public static function resetAllCustomStyles()
        {
            return Concrete\Core\Page\Page::resetAllCustomStyles();
        }

        public function update($data)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->update($data);
        }

        public function clearPagePermissions()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->clearPagePermissions();
        }

        public function inheritPermissionsFromParent()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->inheritPermissionsFromParent();
        }

        public function inheritPermissionsFromDefaults()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->inheritPermissionsFromDefaults();
        }

        public function setPermissionsToManualOverride()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPermissionsToManualOverride();
        }

        public function rescanAreaPermissions()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->rescanAreaPermissions();
        }

        public function setOverrideTemplatePermissions($cOverrideTemplatePermissions)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setOverrideTemplatePermissions($cOverrideTemplatePermissions);
        }

        public function updatePermissionsCollectionID($cParentIDString, $npID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->updatePermissionsCollectionID($cParentIDString, $npID);
        }

        public function acquireAreaPermissions($permissionsCollectionID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->acquireAreaPermissions($permissionsCollectionID);
        }

        public function acquirePagePermissions($permissionsCollectionID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->acquirePagePermissions($permissionsCollectionID);
        }

        public function updateGroupsSubCollection($cParentIDString)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->updateGroupsSubCollection($cParentIDString);
        }

        public function addBlock($bt, $a, $data)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->addBlock($bt, $a, $data);
        }

        public function move($nc)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->move($nc);
        }

        public function duplicateAll($nc, $preserveUserID = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->duplicateAll($nc, $preserveUserID);
        }

        /**
        * @access private
        **/
        public function _duplicateAll($cParent, $cNewParent, $preserveUserID = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->_duplicateAll($cParent, $cNewParent, $preserveUserID);
        }

        public function duplicate($nc, $preserveUserID = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->duplicate($nc, $preserveUserID);
        }

        public function delete()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->delete();
        }

        public function moveToTrash()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->moveToTrash();
        }

        public function rescanChildrenDisplayOrder()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->rescanChildrenDisplayOrder();
        }

        public function getNextSubPageDisplayOrder()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getNextSubPageDisplayOrder();
        }

        /**
        * Recalculates the canonical page path for the current page, based on its current version, URL slug, etc..
        */
        public function rescanCollectionPath()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->rescanCollectionPath();
        }

        /**
        * For the curret page, return the text that will be used for that pages canonical path. This happens before
        * any uniqueness checks get run.
        * @return string
        */
        protected function computeCanonicalPagePath()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->computeCanonicalPagePath();
        }

        public function updateDisplayOrder($do, $cID = 0)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->updateDisplayOrder($do, $cID);
        }

        public function movePageDisplayOrderToTop()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->movePageDisplayOrderToTop();
        }

        public function movePageDisplayOrderToBottom()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->movePageDisplayOrderToBottom();
        }

        public function movePageDisplayOrderToSibling(Concrete\Core\Page\Page $c, $position = "before")
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->movePageDisplayOrderToSibling($c, $position);
        }

        public function rescanSystemPageStatus()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->rescanSystemPageStatus();
        }

        public function isInTrash()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isInTrash();
        }

        public function moveToRoot()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->moveToRoot();
        }

        public function deactivate()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->deactivate();
        }

        public function activate()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->activate();
        }

        public function isActive()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isActive();
        }

        public function setPageIndexScore($score)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPageIndexScore($score);
        }

        public function getPageIndexScore()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageIndexScore();
        }

        public function getPageIndexContent()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageIndexContent();
        }

        public function _associateMasterCollectionBlocks($newCID, $masterCID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->_associateMasterCollectionBlocks($newCID, $masterCID);
        }

        public function _associateMasterCollectionAttributes($newCID, $masterCID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->_associateMasterCollectionAttributes($newCID, $masterCID);
        }

        /**
        * Adds the home page to the system. Typically used only by the installation program.
        * @return page
        **/
        public static function addHomePage()
        {
            return Concrete\Core\Page\Page::addHomePage();
        }

        /**
        * Adds a new page of a certain type, using a passed associate array to setup value. $data may contain any or all of the following:
        * "uID": User ID of the page's owner
        * "pkgID": Package ID the page belongs to
        * "cName": The name of the page
        * "cHandle": The handle of the page as used in the path
        * "cDatePublic": The date assigned to the page
        * @param \Concrete\Core\Page\Type\Type $pt
        * @param array $data
        * @return page
        **/
        public function add($pt, $data, $template = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->add($pt, $data, $template);
        }

        protected function acquireAreaStylesFromDefaults(Concrete\Core\Page\Template $template)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->acquireAreaStylesFromDefaults($template);
        }

        public function getCustomStyleObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCustomStyleObject();
        }

        public function getCollectionFullPageCaching()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionFullPageCaching();
        }

        public function getCollectionFullPageCachingLifetime()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionFullPageCachingLifetime();
        }

        public function getCollectionFullPageCachingLifetimeCustomValue()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionFullPageCachingLifetimeCustomValue();
        }

        public function getCollectionFullPageCachingLifetimeValue()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionFullPageCachingLifetimeValue();
        }

        public function addStatic($data)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->addStatic($data);
        }

        public static function getCurrentPage()
        {
            return Concrete\Core\Page\Page::getCurrentPage();
        }

        /**
        * Returns the total number of page views for a specific page
        */
        public function getTotalPageViews($date = null)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getTotalPageViews($date);
        }

        public function getPageDraftTargetParentPageID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageDraftTargetParentPageID();
        }

        public function setPageDraftTargetParentPageID($cParentID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPageDraftTargetParentPageID($cParentID);
        }

        /**
        * Gets a pages statistics
        */
        public function getPageStatistics($limit = 20)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageStatistics($limit);
        }

        public static function reindexPendingPages()
        {
            return Concrete\Core\Page\Collection\Collection::reindexPendingPages();
        }

        public static function getByHandle($handle)
        {
            return Concrete\Core\Page\Collection\Collection::getByHandle($handle);
        }

        public function addCollection($data)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->addCollection($data);
        }

        public function loadVersionObject($cvID = "ACTIVE")
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->loadVersionObject($cvID);
        }

        public function getVersionToModify()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getVersionToModify();
        }

        public function getVersionObject()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getVersionObject();
        }

        public function cloneVersion($versionComments)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->cloneVersion($versionComments);
        }

        public function getCollectionID()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionID();
        }

        public function getNextVersionComments()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getNextVersionComments();
        }

        public function getFeatureAssignments()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getFeatureAssignments();
        }

        /**
        * Returns the value of the attribute with the handle $ak
        * of the current object.
        *
        * $displayMode makes it possible to get the correct output
        * value. When you need the raw attribute value or object, use
        * this:
        * <code>
        * $c = Page::getCurrentPage();
        * $attributeValue = $c->getAttribute('attribute_handle');
        * </code>
        *
        * But if you need the formatted output supported by some
        * attribute, use this:
        * <code>
        * $c = Page::getCurrentPage();
        * $attributeValue = $c->getAttribute('attribute_handle', 'display');
        * </code>
        *
        * An attribute type like "date" will then return the date in
        * the correct format just like other attributes will show
        * you a nicely formatted output and not just a simple value
        * or object.
        *
        *
        * @param string|object $akHandle
        * @param boolean       $displayMode
        * @return type
        */
        public function getAttribute($akHandle, $displayMode = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getAttribute($akHandle, $displayMode);
        }

        public function getCollectionAttributeValue($ak)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionAttributeValue($ak);
        }

        public function clearCollectionAttributes($retainAKIDs = array())
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->clearCollectionAttributes($retainAKIDs);
        }

        public function getVersionID()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getVersionID();
        }

        public function reindex($index = false, $actuallyDoReindex = true)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->reindex($index, $actuallyDoReindex);
        }

        public function clearAttribute($ak)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->clearAttribute($ak);
        }

        public function getAttributeValueObject($ak, $createIfNotFound = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getAttributeValueObject($ak, $createIfNotFound);
        }

        public function getSetCollectionAttributes()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getSetCollectionAttributes();
        }

        public function addAttribute($ak, $value)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->addAttribute($ak, $value);
        }

        public function setAttribute($ak, $value)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->setAttribute($ak, $value);
        }

        /**
        * @param string $arHandle
        * @return Area
        */
        public function getArea($arHandle)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getArea($arHandle);
        }

        public function hasAliasedContent()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->hasAliasedContent();
        }

        public function getCollectionDateLastModified()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionDateLastModified();
        }

        public function getCollectionDateAdded()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionDateAdded();
        }

        /**
        * Retrieves all custom style rules that should be inserted into the header on a page, whether they are defined in areas
        * or blocks
        */
        public function outputCustomStyleHeaderItems($return = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->outputCustomStyleHeaderItems($return);
        }

        public function getAreaCustomStyle($area, $force = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getAreaCustomStyle($area, $force);
        }

        public function resetAreaCustomStyle($area)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->resetAreaCustomStyle($area);
        }

        public function setCustomStyleSet($area, $set)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->setCustomStyleSet($area, $set);
        }

        public function relateVersionEdits($oc)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->relateVersionEdits($oc);
        }

        public function rescanDisplayOrder($areaName)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->rescanDisplayOrder($areaName);
        }

        public function refreshCache()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->refreshCache();
        }

        public function getGlobalBlocks()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getGlobalBlocks();
        }

        /**
        * List the blocks in a collection or area within a collection
        *
        * @param bool|string $arHandle . If specified, returns just the blocks in an area
        * @return array
        */
        public function getBlocks($arHandle = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getBlocks($arHandle);
        }

        /**
        * List the block IDs in a collection or area within a collection
        *
        * @param bool|string $arHandle . If specified, returns just the blocks in an area
        * @return array
        */
        public function getBlockIDs($arHandle = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getBlockIDs($arHandle);
        }

        public function getCollectionAreaDisplayOrder($arHandle, $ignoreVersions = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionAreaDisplayOrder($arHandle, $ignoreVersions);
        }

        public function addFeature(Concrete\Core\Feature\Feature $fe)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->addFeature($fe);
        }

        public function markModified()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->markModified();
        }

        public function duplicateCollection()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->duplicateCollection();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class PageCache extends \Concrete\Core\Cache\Page\PageCache
    {

        /** @var \Concrete\Core\Cache\Page\PageCache */
        protected static $instance;

        public function deliver(Concrete\Core\Cache\Page\PageCacheRecord $record)
        {
            /** @var Concrete\Core\Cache\Page\PageCache $instance */
            return $instance->deliver($record);
        }

        public static function getLibrary()
        {
            return Concrete\Core\Cache\Page\PageCache::getLibrary();
        }

        /**
        * Note: can't use the User object directly because it might query the database
        */
        public function shouldCheckCache(Concrete\Core\Http\Request $req)
        {
            /** @var Concrete\Core\Cache\Page\PageCache $instance */
            return $instance->shouldCheckCache($req);
        }

        public function outputCacheHeaders(Concrete\Core\Page\Page $c)
        {
            /** @var Concrete\Core\Cache\Page\PageCache $instance */
            return $instance->outputCacheHeaders($c);
        }

        public function getCacheHeaders(Concrete\Core\Page\Page $c)
        {
            /** @var Concrete\Core\Cache\Page\PageCache $instance */
            return $instance->getCacheHeaders($c);
        }

        public function shouldAddToCache(Concrete\Core\Page\View\PageView $v)
        {
            /** @var Concrete\Core\Cache\Page\PageCache $instance */
            return $instance->shouldAddToCache($v);
        }

        public function getCacheKey($mixed)
        {
            /** @var Concrete\Core\Cache\Page\PageCache $instance */
            return $instance->getCacheKey($mixed);
        }

    }

    class PageController extends \Concrete\Core\Page\Controller\PageController
    {

        /** @var \Concrete\Core\Page\Controller\PageController */
        protected static $instance;

        public function supportsPageCache()
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->supportsPageCache();
        }

        /**
        * Given either a path or a Page object, this is a shortcut to
        * 1. Grab the controller of that page.
        * 2. Grab the view of that controller
        * 3. Render that view.
        * 4. Exit – so we immediately stop all other output in the controller that
        * called render().
        * @param @string|\Concrete\Core\Page\Page $var
        */
        public function render($var)
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->render($var);
        }

        public function getPageObject()
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->getPageObject();
        }

        public function getTheme()
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->getTheme();
        }

        public function getRequestAction()
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->getRequestAction();
        }

        public function getRequestActionParameters()
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->getRequestActionParameters();
        }

        public function getControllerActionPath()
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->getControllerActionPath();
        }

        public function setupRequestActionAndParameters(Concrete\Core\Http\Request $request)
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->setupRequestActionAndParameters($request);
        }

        public function isValidControllerTask($action, $parameters = array())
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->isValidControllerTask($action, $parameters);
        }

        protected function setPassThruBlockController(Concrete\Core\Block\Block $b, Concrete\Core\Block\BlockController $controller)
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->setPassThruBlockController($b, $controller);
        }

        public function getPassThruBlockController(Concrete\Core\Block\Block $b)
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->getPassThruBlockController($b);
        }

        public function validateRequest()
        {
            /** @var Concrete\Core\Page\Controller\PageController $instance */
            return $instance->validateRequest();
        }

        public function setViewObject(Concrete\Core\View\AbstractView $view)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setViewObject($view);
        }

        public function setTheme($mixed)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setTheme($mixed);
        }

        public function setThemeViewTemplate($template)
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->setThemeViewTemplate($template);
        }

        public function getThemeViewTemplate()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getThemeViewTemplate();
        }

        public function getViewObject()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->getViewObject();
        }

        public function action()
        {
            /** @var Concrete\Core\Controller\Controller $instance */
            return $instance->action();
        }

        public function requireAsset()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->requireAsset();
        }

        /**
        * Adds an item to the view's header. This item will then be automatically printed out before the <body> section of the page
        *
        * @param string $item
        * @return void
        */
        public function addHeaderItem($item)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->addHeaderItem($item);
        }

        /**
        * Adds an item to the view's footer. This item will then be automatically printed out before the </body> section of the page
        *
        * @param string $item
        * @return void
        */
        public function addFooterItem($item)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->addFooterItem($item);
        }

        public function set($key, $val)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->set($key, $val);
        }

        public function getSets()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getSets();
        }

        public function shouldRunControllerTask()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->shouldRunControllerTask();
        }

        public function getHelperObjects()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getHelperObjects();
        }

        public function get($key = null, $defaultValue = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->get($key, $defaultValue);
        }

        public function getTask()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getTask();
        }

        public function getAction()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getAction();
        }

        public function getParameters()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->getParameters();
        }

        public function on_start()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->on_start();
        }

        public function on_before_render()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->on_before_render();
        }

        /**
        * @deprecated
        */
        public function isPost()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->isPost();
        }

        public function post($key = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->post($key);
        }

        public function redirect()
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->redirect();
        }

        public function runTask($action, $parameters)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->runTask($action, $parameters);
        }

        public function runAction($action, $parameters = array())
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->runAction($action, $parameters);
        }

        public function request($key = null)
        {
            /** @var Concrete\Core\Controller\AbstractController $instance */
            return $instance->request($key);
        }

    }

    class PageEditResponse extends \Concrete\Core\Page\EditResponse
    {

        /** @var \Concrete\Core\Page\EditResponse */
        protected static $instance;

        public function setPage(Concrete\Core\Page\Page $page)
        {
            /** @var Concrete\Core\Page\EditResponse $instance */
            return $instance->setPage($page);
        }

        public function setPages($pages)
        {
            /** @var Concrete\Core\Page\EditResponse $instance */
            return $instance->setPages($pages);
        }

        public function getJSONObject()
        {
            /** @var Concrete\Core\Page\EditResponse $instance */
            return $instance->getJSONObject();
        }

        public function setRedirectURL($url)
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->setRedirectURL($url);
        }

        public function getRedirectURL()
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->getRedirectURL();
        }

        public function setError($error)
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->setError($error);
        }

        public function setMessage($message)
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->setMessage($message);
        }

        public function getMessage()
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->getMessage();
        }

        public function setTitle($title)
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->setTitle($title);
        }

        public function getTitle()
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->getTitle();
        }

        public function getJSON()
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->getJSON();
        }

        public function setAdditionalDataAttribute($key, $value)
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->setAdditionalDataAttribute($key, $value);
        }

        public function getBaseJSONObject()
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->getBaseJSONObject();
        }

        public function outputJSON()
        {
            /** @var Concrete\Core\Application\EditResponse $instance */
            return $instance->outputJSON();
        }

    }

    /**
    *
    * An object that allows a filtered list of pages to be returned.
    *
    */
    class PageList extends \Concrete\Core\Page\PageList
    {

        /** @var \Concrete\Core\Page\PageList */
        protected static $instance;

        protected function getAttributeKeyClassName()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->getAttributeKeyClassName();
        }

        public function setPermissionsChecker(Closure $checker)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->setPermissionsChecker($checker);
        }

        public function ignorePermissions()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->ignorePermissions();
        }

        public function includeAliases()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->includeAliases();
        }

        public function includeInactivePages()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->includeInactivePages();
        }

        public function includeSystemPages()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->includeSystemPages();
        }

        public function isFulltextSearch()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->isFulltextSearch();
        }

        public function setPageVersionToRetrieve($pageVersionToRetrieve)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->setPageVersionToRetrieve($pageVersionToRetrieve);
        }

        public function createQuery()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->createQuery();
        }

        public function finalizeQuery(Doctrine\DBAL\Query\QueryBuilder $query)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->finalizeQuery($query);
        }

        public function getTotalResults()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->getTotalResults();
        }

        protected function createPaginationObject()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->createPaginationObject();
        }

        /**
        * @param $queryRow
        * @return \Concrete\Core\File\File
        */
        public function getResult($queryRow)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->getResult($queryRow);
        }

        public function checkPermissions($mixed)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->checkPermissions($mixed);
        }

        /**
        * Filters by type of collection (using the handle field)
        * @param mixed $ptHandle
        */
        public function filterByPageTypeHandle($ptHandle)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByPageTypeHandle($ptHandle);
        }

        /**
        * Filters by page template
        * @param mixed $ptHandle
        */
        public function filterByPageTemplate(Concrete\Core\Page\Template $template)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByPageTemplate($template);
        }

        /**
        * Filters by date added
        * @param string $date
        */
        public function filterByDateAdded($date, $comparison = "=")
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByDateAdded($date, $comparison);
        }

        /**
        * Filter by number of children.
        * @param $number
        * @param string $comparison
        */
        public function filterByNumberOfChildren($number, $comparison = ">")
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByNumberOfChildren($number, $comparison);
        }

        /**
        * Filter by last modified date.
        * @param $date
        * @param string $comparison
        */
        public function filterByDateLastModified($date, $comparison = "=")
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByDateLastModified($date, $comparison);
        }

        /**
        * Filters by public date
        * @param string $date
        */
        public function filterByPublicDate($date, $comparison = "=")
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByPublicDate($date, $comparison);
        }

        /**
        * Displays only those pages that have style customizations
        */
        public function filterByPagesWithCustomStyles()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByPagesWithCustomStyles();
        }

        /**
        * Filters by user ID)
        * @param mixed $uID
        */
        public function filterByUserID($uID)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByUserID($uID);
        }

        /**
        * Filters by page type ID
        * @param array | integer $cParentID
        */
        public function filterByPageTypeID($ptID)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByPageTypeID($ptID);
        }

        /**
        * Filters by parent ID
        * @param array | integer $cParentID
        */
        public function filterByParentID($cParentID)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByParentID($cParentID);
        }

        /**
        * Filters a list by page name.
        * @param $name
        * @param bool $exact
        */
        public function filterByName($name, $exact = false)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByName($name, $exact);
        }

        /**
        * Filter a list by page path.
        * @param $path
        * @param bool $includeAllChildren
        */
        public function filterByPath($path, $includeAllChildren = true)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByPath($path, $includeAllChildren);
        }

        /**
        * Filters keyword fields by keywords (including name, description, content, and attributes.
        * @param $keywords
        */
        public function filterByKeywords($keywords)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByKeywords($keywords);
        }

        public function filterByFulltextKeywords($keywords)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByFulltextKeywords($keywords);
        }

        /**
        * Filters by topic. Doesn't look at specific attributes –instead, actually joins to the topics table.
        */
        public function filterByTopic($topic)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByTopic($topic);
        }

        /**
        * Sorts this list by display order
        */
        public function sortByDisplayOrder()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->sortByDisplayOrder();
        }

        /**
        * Sorts this list by display order descending
        */
        public function sortByDisplayOrderDescending()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->sortByDisplayOrderDescending();
        }

        /**
        * Sorts by ID in ascending order.
        */
        public function sortByCollectionIDAscending()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->sortByCollectionIDAscending();
        }

        /**
        * Sorts this list by public date ascending order
        */
        public function sortByPublicDate()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->sortByPublicDate();
        }

        /**
        * Sorts by name in ascending order.
        */
        public function sortByName()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->sortByName();
        }

        /**
        * Sorts by name in descending order.
        */
        public function sortByNameDescending()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->sortByNameDescending();
        }

        /**
        * Sorts this list by public date descending order
        */
        public function sortByPublicDateDescending()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->sortByPublicDateDescending();
        }

        /**
        * Sorts by fulltext relevance (requires that the query be fulltext-based
        */
        public function sortByRelevance()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->sortByRelevance();
        }

        /**
        * @deprecated
        */
        public function filterByCollectionTypeHandle($ctHandle)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByCollectionTypeHandle($ctHandle);
        }

        /**
        * @deprecated
        */
        public function filterByCollectionTypeID($ctID)
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->filterByCollectionTypeID($ctID);
        }

        /**
        * This does nothing.
        * @deprecated
        */
        public function ignoreAliases()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->ignoreAliases();
        }

        /**
        * @deprecated
        */
        public function displayUnapprovedPages()
        {
            /** @var Concrete\Core\Page\PageList $instance */
            return $instance->displayUnapprovedPages();
        }

        /**
        * Filters by a attribute.
        */
        public function filterByAttribute($handle, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Search\ItemList\Database\AttributedItemList $instance */
            return $instance->filterByAttribute($handle, $value, $comparison);
        }

        /**
        * @param StickyRequest $request
        */
        public function setupAutomaticSorting(Concrete\Core\Search\StickyRequest $request = null)
        {
            /** @var Concrete\Core\Search\ItemList\Database\AttributedItemList $instance */
            return $instance->setupAutomaticSorting($request);
        }

        public function getQueryObject()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->getQueryObject();
        }

        public function deliverQueryObject()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->deliverQueryObject();
        }

        public function executeGetResults()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->executeGetResults();
        }

        public function debugStart()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->debugStart();
        }

        public function debugStop()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->debugStop();
        }

        protected function executeSortBy($column, $direction = "asc")
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->executeSortBy($column, $direction);
        }

        /**
        * @deprecated
        */
        public function filter($field, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->filter($field, $value, $comparison);
        }

        public function debug()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->debug();
        }

        public function isDebugged()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->isDebugged();
        }

        public function sortBy($field, $direction = "asc")
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->sortBy($field, $direction);
        }

        /** Returns a full array of results. */
        public function getResults()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getResults();
        }

        public function getActiveSortColumn()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getActiveSortColumn();
        }

        public function isActiveSortColumn($field)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->isActiveSortColumn($field);
        }

        public function disableAutomaticSorting()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->disableAutomaticSorting();
        }

        public function getSortClassName($column)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getSortClassName($column);
        }

        public function getSortURL($column, $dir = "asc", $url = false)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getSortURL($column, $dir, $url);
        }

        public function getActiveSortDirection()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getActiveSortDirection();
        }

        public function getQuerySortColumnParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQuerySortColumnParameter();
        }

        public function getQueryPaginationPageParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQueryPaginationPageParameter();
        }

        public function getQuerySortDirectionParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQuerySortDirectionParameter();
        }

        public function setItemsPerPage($itemsPerPage)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->setItemsPerPage($itemsPerPage);
        }

        /**
        * @return \Concrete\Core\Search\Pagination\Pagination|\Concrete\Core\Search\Pagination\PermissionablePagination
        */
        public function getPagination()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getPagination();
        }

        /**
        * @deprecated
        */
        public function get()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->get();
        }

    }

    /**
    * @Entity
    * @Table(name="PageTemplates")
    */
    class PageTemplate extends \Concrete\Core\Page\Template
    {

        /** @var \Concrete\Core\Page\Template */
        protected static $instance;

        public static function exportList($xml)
        {
            return Concrete\Core\Page\Template::exportList($xml);
        }

        public function getPageTemplateID()
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->getPageTemplateID();
        }

        public function getPageTemplateName()
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->getPageTemplateName();
        }

        public function getPageTemplateHandle()
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->getPageTemplateHandle();
        }

        public function isPageTemplateInternal()
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->isPageTemplateInternal();
        }

        public function getPageTemplateIcon()
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->getPageTemplateIcon();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->getPackageHandle();
        }

        /** Returns the display name for this page template (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *   Escape the result in html format (if $format is 'html').
        *   If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getPageTemplateDisplayName($format = "html")
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->getPageTemplateDisplayName($format);
        }

        public static function getByHandle($pTemplateHandle)
        {
            return Concrete\Core\Page\Template::getByHandle($pTemplateHandle);
        }

        public static function getByID($pTemplateID)
        {
            return Concrete\Core\Page\Template::getByID($pTemplateID);
        }

        public function delete()
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->delete();
        }

        protected static function sort($list)
        {
            return Concrete\Core\Page\Template::sort($list);
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Page\Template::getListByPackage($pkg);
        }

        public static function getList($includeInternal = false)
        {
            return Concrete\Core\Page\Template::getList($includeInternal);
        }

        public static function add($pTemplateHandle, $pTemplateName, $pTemplateIcon = FILENAME_PAGE_TEMPLATE_DEFAULT_ICON, $pkg = null, $pTemplateIsInternal = false)
        {
            return Concrete\Core\Page\Template::add($pTemplateHandle, $pTemplateName, $pTemplateIcon, $pkg, $pTemplateIsInternal);
        }

        public function update($pTemplateHandle, $pTemplateName, $pTemplateIcon = FILENAME_PAGE_TEMPLATE_DEFAULT_ICON)
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->update($pTemplateHandle, $pTemplateName, $pTemplateIcon);
        }

        public function getIcons()
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->getIcons();
        }

        public function getPageTemplateIconImage()
        {
            /** @var Concrete\Core\Page\Template $instance */
            return $instance->getPageTemplateIconImage();
        }

    }

    /**
    *
    * A page's theme is a pointer to a directory containing templates, CSS files and optionally PHP includes, images and JavaScript files.
    * Themes inherit down the tree when a page is added, but can also be set at the site-wide level (thereby overriding any previous choices.)
    * @package Pages and Collections
    * @subpackages Themes
    */
    class PageTheme extends \Concrete\Core\Page\Theme\Theme
    {

        /** @var \Concrete\Core\Page\Theme\Theme */
        protected static $instance;

        public static function getGlobalList()
        {
            return Concrete\Core\Page\Theme\Theme::getGlobalList();
        }

        public static function getLocalList()
        {
            return Concrete\Core\Page\Theme\Theme::getLocalList();
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Page\Theme\Theme::getListByPackage($pkg);
        }

        public static function getList($where = null)
        {
            return Concrete\Core\Page\Theme\Theme::getList($where);
        }

        public static function getInstalledHandles()
        {
            return Concrete\Core\Page\Theme\Theme::getInstalledHandles();
        }

        public function providesAsset($assetType, $assetHandle)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->providesAsset($assetType, $assetHandle);
        }

        public function requireAsset($assetType, $assetHandle)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->requireAsset($assetType, $assetHandle);
        }

        public static function getAvailableThemes($filterInstalled = true)
        {
            return Concrete\Core\Page\Theme\Theme::getAvailableThemes($filterInstalled);
        }

        public static function getByFileHandle($handle, $dir = DIR_FILES_THEMES, $pkgHandle = "")
        {
            return Concrete\Core\Page\Theme\Theme::getByFileHandle($handle, $dir, $pkgHandle);
        }

        /**
        * Checks the theme for a styles.xml file (which is how customizations happen.)
        * @return boolean
        *
        */
        public function isThemeCustomizable()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->isThemeCustomizable();
        }

        /**
        * Gets the style list object for this theme.
        * @return \Concrete\Core\StyleCustomizer\StyleList
        */
        public function getThemeCustomizableStyleList()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeCustomizableStyleList();
        }

        /**
        * Gets a preset for this theme by handle
        */
        public function getThemeCustomizablePreset($handle)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeCustomizablePreset($handle);
        }

        /**
        * Gets all presets available to this theme.
        */
        public function getThemeCustomizableStylePresets()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeCustomizableStylePresets();
        }

        public function enablePreviewRequest()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->enablePreviewRequest();
        }

        public function resetThemeCustomStyles()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->resetThemeCustomStyles();
        }

        public function isThemePreviewRequest()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->isThemePreviewRequest();
        }

        public function getThemeCustomizableStyleSheets()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeCustomizableStyleSheets();
        }

        public function getStylesheetObject($stylesheet)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getStylesheetObject($stylesheet);
        }

        /**
        * Looks into the current CSS directory and returns a fully compiled stylesheet
        * when passed a LESS stylesheet. Also serves up custom value list values for the stylesheet if they exist.
        * @param  string $stylesheet The LESS stylesheet to compile
        * @return string             The path to the stylesheet.
        */
        public function getStylesheet($stylesheet)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getStylesheet($stylesheet);
        }

        /**
        * Returns a Custom Style Object for the theme if one exists.
        */
        public function getThemeCustomStyleObject()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeCustomStyleObject();
        }

        public function setCustomStyleObject(Concrete\Core\StyleCustomizer\Style\ValueList $valueList, $selectedPreset = false, $customCssRecord = false)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->setCustomStyleObject($valueList, $selectedPreset, $customCssRecord);
        }

        /**
        * @param string $pThemeHandle
        * @return PageTheme
        */
        public static function getByHandle($pThemeHandle)
        {
            return Concrete\Core\Page\Theme\Theme::getByHandle($pThemeHandle);
        }

        /**
        * @param int $ptID
        * @return PageTheme
        */
        public static function getByID($pThemeID)
        {
            return Concrete\Core\Page\Theme\Theme::getByID($pThemeID);
        }

        protected function populateThemeQuery($where, $args)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->populateThemeQuery($where, $args);
        }

        public static function add($pThemeHandle, $pkg = null)
        {
            return Concrete\Core\Page\Theme\Theme::add($pThemeHandle, $pkg);
        }

        public function getFilesInTheme()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getFilesInTheme();
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Page\Theme\Theme::exportList($xml);
        }

        protected static function install($dir, $pThemeHandle, $pkgID)
        {
            return Concrete\Core\Page\Theme\Theme::install($dir, $pThemeHandle, $pkgID);
        }

        public function updateThemeCustomClass()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->updateThemeCustomClass();
        }

        public function getThemeID()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeID();
        }

        public function getThemeName()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeName();
        }

        /** Returns the display name for this theme (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *   Escape the result in html format (if $format is 'html').
        *   If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getThemeDisplayName($format = "html")
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeDisplayName($format);
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getPackageHandle();
        }

        /**
        * Returns whether a theme has a custom class.
        */
        public function hasCustomClass()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->hasCustomClass();
        }

        public function getThemeHandle()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeHandle();
        }

        public function getThemeDescription()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeDescription();
        }

        public function getThemeDisplayDescription($format = "html")
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeDisplayDescription($format);
        }

        public function getThemeDirectory()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeDirectory();
        }

        public function getThemeURL()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeURL();
        }

        public function getThemeEditorCSS()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeEditorCSS();
        }

        public function setThemeURL($pThemeURL)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->setThemeURL($pThemeURL);
        }

        public function setThemeDirectory($pThemeDirectory)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->setThemeDirectory($pThemeDirectory);
        }

        public function setThemeHandle($pThemeHandle)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->setThemeHandle($pThemeHandle);
        }

        public function setStylesheetCachePath($path)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->setStylesheetCachePath($path);
        }

        public function setStylesheetCacheRelativePath($path)
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->setStylesheetCacheRelativePath($path);
        }

        public function getStylesheetCachePath()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getStylesheetCachePath();
        }

        public function getStylesheetCacheRelativePath()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getStylesheetCacheRelativePath();
        }

        public function isUninstallable()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->isUninstallable();
        }

        public function getThemeThumbnail()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeThumbnail();
        }

        public function applyToSite()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->applyToSite();
        }

        public static function getSiteTheme()
        {
            return Concrete\Core\Page\Theme\Theme::getSiteTheme();
        }

        public function uninstall()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->uninstall();
        }

        public function registerAssets()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->registerAssets();
        }

        public function supportsGridFramework()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->supportsGridFramework();
        }

        /**
        * @return GridFramework|null
        */
        public function getThemeGridFrameworkObject()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeGridFrameworkObject();
        }

        public function getThemeBlockClasses()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeBlockClasses();
        }

        public function getThemeAreaClasses()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeAreaClasses();
        }

        public function getThemeEditorClasses()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeEditorClasses();
        }

        public function getThemeDefaultBlockTemplates()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeDefaultBlockTemplates();
        }

        public function getThemeResponsiveImageMap()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeResponsiveImageMap();
        }

        public function getThemeGatheringGridItemMargin()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeGatheringGridItemMargin();
        }

        public function getThemeGatheringGridItemWidth()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeGatheringGridItemWidth();
        }

        public function getThemeGatheringGridItemHeight()
        {
            /** @var Concrete\Core\Page\Theme\Theme $instance */
            return $instance->getThemeGatheringGridItemHeight();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class PageType extends \Concrete\Core\Page\Type\Type
    {

        /** @var \Concrete\Core\Page\Type\Type */
        protected static $instance;

        public function getPageTypeID()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypeID();
        }

        public function getPageTypeName()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypeName();
        }

        public function getPageTypeDisplayName($format = "html")
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypeDisplayName($format);
        }

        public function getPageTypeHandle()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypeHandle();
        }

        public function getPageTypePublishTargetTypeID()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypePublishTargetTypeID();
        }

        public function getPageTypePublishTargetObject()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypePublishTargetObject();
        }

        public function getPageTypeAllowedPageTemplates()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypeAllowedPageTemplates();
        }

        public function getPageTypeDefaultPageTemplateID()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypeDefaultPageTemplateID();
        }

        public function getPageTypeDefaultPageTemplateObject()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypeDefaultPageTemplateObject();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function isPageTypeFrequentlyAdded()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->isPageTypeFrequentlyAdded();
        }

        public function getPageTypeDisplayOrder()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypeDisplayOrder();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        public function isPageTypeInternal()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->isPageTypeInternal();
        }

        public function doesPageTypeLaunchInComposer()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->doesPageTypeLaunchInComposer();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPackageHandle();
        }

        protected function stripEmptyPageTypeComposerControls(Concrete\Core\Page\Page $c)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->stripEmptyPageTypeComposerControls($c);
        }

        public function publish(Concrete\Core\Page\Page $c)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->publish($c);
        }

        public function savePageTypeComposerForm(Concrete\Core\Page\Page $c)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->savePageTypeComposerForm($c);
        }

        public function getPageTypeSelectedPageTemplateObjects()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypeSelectedPageTemplateObjects();
        }

        public static function getByDefaultsPage(Concrete\Core\Page\Page $c)
        {
            return Concrete\Core\Page\Type\Type::getByDefaultsPage($c);
        }

        public function getPageTypePageTemplateDefaultPageObject(Concrete\Core\Page\Template $template = null)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypePageTemplateDefaultPageObject($template);
        }

        public function getPageTypePageTemplateObjects()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->getPageTypePageTemplateObjects();
        }

        public static function importTargets($node)
        {
            return Concrete\Core\Page\Type\Type::importTargets($node);
        }

        public static function import($node)
        {
            return Concrete\Core\Page\Type\Type::import($node);
        }

        public static function importContent($node)
        {
            return Concrete\Core\Page\Type\Type::importContent($node);
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Page\Type\Type::exportList($xml);
        }

        public function rescanPageTypeComposerOutputControlObjects()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->rescanPageTypeComposerOutputControlObjects();
        }

        public function duplicate($ptHandle, $ptName)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->duplicate($ptHandle, $ptName);
        }

        public static function add($data, $pkg = false)
        {
            return Concrete\Core\Page\Type\Type::add($data, $pkg);
        }

        public function update($data)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->update($data);
        }

        protected function rescanPageTypePageTemplateDefaultPages()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->rescanPageTypePageTemplateDefaultPages();
        }

        public static function getList($includeInternal = false)
        {
            return Concrete\Core\Page\Type\Type::getList($includeInternal);
        }

        protected static function returnList($ptIDs)
        {
            return Concrete\Core\Page\Type\Type::returnList($ptIDs);
        }

        public static function getFrequentlyUsedList()
        {
            return Concrete\Core\Page\Type\Type::getFrequentlyUsedList();
        }

        public static function getInfrequentlyUsedList()
        {
            return Concrete\Core\Page\Type\Type::getInfrequentlyUsedList();
        }

        public static function getListByPackage(Concrete\Core\Package\Package $pkg)
        {
            return Concrete\Core\Page\Type\Type::getListByPackage($pkg);
        }

        public static function getByID($ptID)
        {
            return Concrete\Core\Page\Type\Type::getByID($ptID);
        }

        public static function getByHandle($ptHandle)
        {
            return Concrete\Core\Page\Type\Type::getByHandle($ptHandle);
        }

        public function delete()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->delete();
        }

        public function setConfiguredPageTypePublishTargetObject(Concrete\Core\Page\Type\PublishTarget\Configuration\Configuration $configuredTarget)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->setConfiguredPageTypePublishTargetObject($configuredTarget);
        }

        public function rescanFormLayoutSetDisplayOrder()
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->rescanFormLayoutSetDisplayOrder();
        }

        public function addPageTypeComposerFormLayoutSet($ptComposerFormLayoutSetName, $ptComposerFormLayoutSetDescription)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->addPageTypeComposerFormLayoutSet($ptComposerFormLayoutSetName, $ptComposerFormLayoutSetDescription);
        }

        /**
        * Returns true if pages of the current type are allowed beneath the passed parent page.
        * @param \Concrete\Core\Page\Page $page
        */
        public function canPublishPageTypeBeneathPage(Concrete\Core\Page\Page $page)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->canPublishPageTypeBeneathPage($page);
        }

        public function validateCreateDraftRequest($pt)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->validateCreateDraftRequest($pt);
        }

        public function createDraft(Concrete\Core\Page\Template $pt, $u = false)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->createDraft($pt, $u);
        }

        public function renderComposerOutputForm($page = null, $targetPage = null)
        {
            /** @var Concrete\Core\Page\Type\Type $instance */
            return $instance->renderComposerOutputForm($page, $targetPage);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class PermissionAccess extends \Concrete\Core\Permission\Access\Access
    {

        /** @var \Concrete\Core\Permission\Access\Access */
        protected static $instance;

        public function setPermissionKey($permissionKey)
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->setPermissionKey($permissionKey);
        }

        public function getPermissionObject()
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->getPermissionObject();
        }

        public function getPermissionObjectToCheck()
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->getPermissionObjectToCheck();
        }

        public function getPermissionAccessID()
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->getPermissionAccessID();
        }

        public function isPermissionAccessInUse()
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->isPermissionAccessInUse();
        }

        public function getPermissionAccessIDList()
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->getPermissionAccessIDList();
        }

        protected function deliverAccessListItems($q, $accessType, $filterEntities)
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->deliverAccessListItems($q, $accessType, $filterEntities);
        }

        public function validateAndFilterAccessEntities($accessEntities)
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->validateAndFilterAccessEntities($accessEntities);
        }

        public function validateAccessEntities($accessEntities)
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->validateAccessEntities($accessEntities);
        }

        public function validate()
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->validate();
        }

        public static function createByMerge($permissions)
        {
            return Concrete\Core\Permission\Access\Access::createByMerge($permissions);
        }

        public function getAccessListItems($accessType = PermissionKey::ACCESS_TYPE_INCLUDE, $filterEntities = array())
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->getAccessListItems($accessType, $filterEntities);
        }

        protected function buildAssignmentFilterString($accessType, $filterEntities)
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->buildAssignmentFilterString($accessType, $filterEntities);
        }

        public function clearWorkflows()
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->clearWorkflows();
        }

        public function attachWorkflow(Concrete\Core\Workflow\Workflow $wf)
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->attachWorkflow($wf);
        }

        public function getWorkflows()
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->getWorkflows();
        }

        public function duplicate($newPA = false)
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->duplicate($newPA);
        }

        public function markAsInUse()
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->markAsInUse();
        }

        public function addListItem(Concrete\Core\Permission\Access\Entity\Entity $pae, $durationObject = false, $accessType = PermissionKey::ACCESS_TYPE_INCLUDE)
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->addListItem($pae, $durationObject, $accessType);
        }

        public function removeListItem(Concrete\Core\Permission\Access\Entity\Entity $pe)
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->removeListItem($pe);
        }

        public function save()
        {
            /** @var Concrete\Core\Permission\Access\Access $instance */
            return $instance->save();
        }

        public static function create(Concrete\Core\Permission\Key\Key $pk)
        {
            return Concrete\Core\Permission\Access\Access::create($pk);
        }

        public static function getByID($paID, Concrete\Core\Permission\Key\Key $pk, $checkPA = true)
        {
            return Concrete\Core\Permission\Access\Access::getByID($paID, $pk, $checkPA);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class PermissionKey extends \Concrete\Core\Permission\Key\Key
    {

        /** @var \Concrete\Core\Permission\Key\Key */
        protected static $instance;

        public function getSupportedAccessTypes()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getSupportedAccessTypes();
        }

        /**
        * Returns whether a permission key can start a workflow
        */
        public function canPermissionKeyTriggerWorkflow()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->canPermissionKeyTriggerWorkflow();
        }

        /**
        * Returns whether a permission key has a custom class.
        */
        public function permissionKeyHasCustomClass()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->permissionKeyHasCustomClass();
        }

        /**
        * Returns the name for this permission key
        */
        public function getPermissionKeyName()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionKeyName();
        }

        /** Returns the display name for this permission key (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *	Escape the result in html format (if $format is 'html').
        *	If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getPermissionKeyDisplayName($format = "html")
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionKeyDisplayName($format);
        }

        /**
        * Returns the handle for this permission key
        */
        public function getPermissionKeyHandle()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionKeyHandle();
        }

        /**
        * Returns the description for this permission key
        */
        public function getPermissionKeyDescription()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionKeyDescription();
        }

        /** Returns the display description for this permission key (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *	Escape the result in html format (if $format is 'html').
        *	If $format is 'text' or any other value, the display description won't be escaped.
        * @return string
        */
        public function getPermissionKeyDisplayDescription($format = "html")
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionKeyDisplayDescription($format);
        }

        /**
        * Returns the ID for this permission key
        */
        public function getPermissionKeyID()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionKeyID();
        }

        public function getPermissionKeyCategoryID()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionKeyCategoryID();
        }

        public function getPermissionKeyCategoryHandle()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionKeyCategoryHandle();
        }

        public function setPermissionObject($object)
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->setPermissionObject($object);
        }

        public function getPermissionObjectToCheck()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionObjectToCheck();
        }

        public function getPermissionObject()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionObject();
        }

        public static function loadAll()
        {
            return Concrete\Core\Permission\Key\Key::loadAll();
        }

        protected static function load($key, $loadBy = "pkID")
        {
            return Concrete\Core\Permission\Key\Key::load($key, $loadBy);
        }

        public function hasCustomOptionsForm()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->hasCustomOptionsForm();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPackageHandle();
        }

        /**
        * Returns a list of all permissions of this category
        */
        public static function getList($pkCategoryHandle, $filters = array())
        {
            return Concrete\Core\Permission\Key\Key::getList($pkCategoryHandle, $filters);
        }

        public function export($axml)
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->export($axml);
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Permission\Key\Key::exportList($xml);
        }

        /**
        * Note, this queries both the pkgID found on the PermissionKeys table AND any permission keys of a special type
        * installed by that package, and any in categories by that package.
        */
        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Permission\Key\Key::getListByPackage($pkg);
        }

        public static function import(SimpleXMLElement $pk)
        {
            return Concrete\Core\Permission\Key\Key::import($pk);
        }

        public static function getByID($pkID)
        {
            return Concrete\Core\Permission\Key\Key::getByID($pkID);
        }

        public static function getByHandle($pkHandle)
        {
            return Concrete\Core\Permission\Key\Key::getByHandle($pkHandle);
        }

        /**
        * Adds an permission key.
        */
        public static function add($pkCategoryHandle, $pkHandle, $pkName, $pkDescription, $pkCanTriggerWorkflow, $pkHasCustomClass, $pkg = false)
        {
            return Concrete\Core\Permission\Key\Key::add($pkCategoryHandle, $pkHandle, $pkName, $pkDescription, $pkCanTriggerWorkflow, $pkHasCustomClass, $pkg);
        }

        /**
        * @access private
        * legacy support
        */
        public function can()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->can();
        }

        public function validate()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->validate();
        }

        public function delete()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->delete();
        }

        /**
        * A shortcut for grabbing the current assignment and passing into that object
        */
        public function getAccessListItems()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getAccessListItems();
        }

        public function getPermissionAssignmentObject()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionAssignmentObject();
        }

        public function getPermissionAccessObject()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionAccessObject();
        }

        public function getPermissionAccessID()
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->getPermissionAccessID();
        }

        public function exportAccess($pxml)
        {
            /** @var Concrete\Core\Permission\Key\Key $instance */
            return $instance->exportAccess($pxml);
        }

        public static function exportTranslations()
        {
            return Concrete\Core\Permission\Key\Key::exportTranslations();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class PermissionKeyCategory extends \Concrete\Core\Permission\Category
    {

        /** @var \Concrete\Core\Permission\Category */
        protected static $instance;

        public static function getByID($pkCategoryID)
        {
            return Concrete\Core\Permission\Category::getByID($pkCategoryID);
        }

        protected static function populateCategories()
        {
            return Concrete\Core\Permission\Category::populateCategories();
        }

        public static function getByHandle($pkCategoryHandle)
        {
            return Concrete\Core\Permission\Category::getByHandle($pkCategoryHandle);
        }

        public function handleExists($pkHandle)
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->handleExists($pkHandle);
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Permission\Category::exportList($xml);
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Permission\Category::getListByPackage($pkg);
        }

        public function getPermissionKeyByHandle($pkHandle)
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->getPermissionKeyByHandle($pkHandle);
        }

        public function getPermissionKeyByID($pkID)
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->getPermissionKeyByID($pkID);
        }

        public function getToolsURL($task = false)
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->getToolsURL($task);
        }

        public function getPermissionKeyCategoryID()
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->getPermissionKeyCategoryID();
        }

        public function getPermissionKeyCategoryHandle()
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->getPermissionKeyCategoryHandle();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->getPackageHandle();
        }

        public function delete()
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->delete();
        }

        public function associateAccessEntityType(Concrete\Core\Permission\Access\Entity\Type $pt)
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->associateAccessEntityType($pt);
        }

        public function deassociateAccessEntityType(Concrete\Core\Permission\Access\Entity\Type $pt)
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->deassociateAccessEntityType($pt);
        }

        public function clearAccessEntityTypeCategories()
        {
            /** @var Concrete\Core\Permission\Category $instance */
            return $instance->clearAccessEntityTypeCategories();
        }

        public static function getList()
        {
            return Concrete\Core\Permission\Category::getList();
        }

        public static function add($pkCategoryHandle, $pkg = false)
        {
            return Concrete\Core\Permission\Category::add($pkCategoryHandle, $pkg);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class Permissions extends \Concrete\Core\Permission\Checker
    {

        /** @var \Concrete\Core\Permission\Checker */
        protected static $instance;

        /**
        * Checks to see if there is a fatal error with this particular permission call.
        */
        public function isError()
        {
            /** @var Concrete\Core\Permission\Checker $instance */
            return $instance->isError();
        }

        /**
        * Returns the error code if there is one
        */
        public function getError()
        {
            /** @var Concrete\Core\Permission\Checker $instance */
            return $instance->getError();
        }

        /**
        * Legacy
        * @private
        */
        public function getOriginalObject()
        {
            /** @var Concrete\Core\Permission\Checker $instance */
            return $instance->getOriginalObject();
        }

        public function getResponseObject()
        {
            /** @var Concrete\Core\Permission\Checker $instance */
            return $instance->getResponseObject();
        }

    }

    class Queue extends \Concrete\Core\Foundation\Queue\Queue
    {

        /** @var \Concrete\Core\Foundation\Queue\Queue */
        protected static $instance;

        public static function get($name, $additionalConfig = array())
        {
            return Concrete\Core\Foundation\Queue\Queue::get($name, $additionalConfig);
        }

        public static function exists($name)
        {
            return Concrete\Core\Foundation\Queue\Queue::exists($name);
        }

    }

    /**
    *
    * The job class is essentially sub-dispatcher for certain maintenance tasks that need to be run at specified intervals. Examples include indexing a search engine or generating a sitemap page.
    * @package Utilities
    * @author Andrew Embler <andrew@concrete5.org>
    * @author Tony Trupp <tony@concrete5.org>
    * @link http://www.concrete5.org
    * @license http://www.opensource.org/licenses/mit-license.php MIT
    *
    */
    class QueueableJob extends \Concrete\Core\Job\QueueableJob
    {

        /** @var \Concrete\Core\Job\QueueableJob */
        protected static $instance;

        public function getJobQueueBatchSize()
        {
            /** @var Concrete\Core\Job\QueueableJob $instance */
            return $instance->getJobQueueBatchSize();
        }

        public function run()
        {
            /** @var Concrete\Core\Job\QueueableJob $instance */
            return $instance->run();
        }

        public function getQueueObject()
        {
            /** @var Concrete\Core\Job\QueueableJob $instance */
            return $instance->getQueueObject();
        }

        public function reset()
        {
            /** @var Concrete\Core\Job\QueueableJob $instance */
            return $instance->reset();
        }

        public function markStarted()
        {
            /** @var Concrete\Core\Job\QueueableJob $instance */
            return $instance->markStarted();
        }

        public function markCompleted($code = 0, $message = false)
        {
            /** @var Concrete\Core\Job\QueueableJob $instance */
            return $instance->markCompleted($code, $message);
        }

        /**
        * Executejob for queueable jobs actually starts the queue, runs, and ends all in one function. This happens if we run a job in legacy mode.
        */
        public function executeJob()
        {
            /** @var Concrete\Core\Job\QueueableJob $instance */
            return $instance->executeJob();
        }

        public function getJobHandle()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobHandle();
        }

        public function getJobID()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getPackageHandle();
        }

        public function getJobLastStatusCode()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobLastStatusCode();
        }

        public function didFail()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->didFail();
        }

        public function canUninstall()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->canUninstall();
        }

        public function supportsQueue()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->supportsQueue();
        }

        public static function jobClassLocations()
        {
            return Concrete\Core\Job\Job::jobClassLocations();
        }

        public function getJobDateLastRun()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobDateLastRun();
        }

        public function getJobStatus()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobStatus();
        }

        public function getJobLastStatusText()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->getJobLastStatusText();
        }

        public static function authenticateRequest($auth)
        {
            return Concrete\Core\Job\Job::authenticateRequest($auth);
        }

        public static function generateAuth()
        {
            return Concrete\Core\Job\Job::generateAuth();
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Job\Job::exportList($xml);
        }

        public static function getList($scheduledOnly = false)
        {
            return Concrete\Core\Job\Job::getList($scheduledOnly);
        }

        public static function getByID($jID = 0)
        {
            return Concrete\Core\Job\Job::getByID($jID);
        }

        public static function getByHandle($jHandle = "")
        {
            return Concrete\Core\Job\Job::getByHandle($jHandle);
        }

        public static function getJobObjByHandle($jHandle = "", $jobData = array())
        {
            return Concrete\Core\Job\Job::getJobObjByHandle($jHandle, $jobData);
        }

        protected static function getClassName($jHandle, $pkgHandle = null)
        {
            return Concrete\Core\Job\Job::getClassName($jHandle, $pkgHandle);
        }

        public static function getAvailableList($includeConcreteDirJobs = 1)
        {
            return Concrete\Core\Job\Job::getAvailableList($includeConcreteDirJobs);
        }

        public function setJobStatus($jStatus = "ENABLED")
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->setJobStatus($jStatus);
        }

        public static function installByHandle($jHandle = "")
        {
            return Concrete\Core\Job\Job::installByHandle($jHandle);
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Job\Job::getListByPackage($pkg);
        }

        public static function installByPackage($jHandle, $pkg)
        {
            return Concrete\Core\Job\Job::installByPackage($jHandle, $pkg);
        }

        public function install()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->install();
        }

        public function uninstall()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->uninstall();
        }

        /**
        * Removes Job log entries
        */
        public static function clearLog()
        {
            return Concrete\Core\Job\Job::clearLog();
        }

        public function isScheduledForNow()
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->isScheduledForNow();
        }

        public function setSchedule($scheduled, $interval, $value)
        {
            /** @var Concrete\Core\Job\Job $instance */
            return $instance->setSchedule($scheduled, $interval, $value);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class Redirect extends \Concrete\Core\Routing\Redirect
    {

        /** @var \Concrete\Core\Routing\Redirect */
        protected static $instance;

        /**
        * Actually sends a redirect
        */
        protected static function createRedirectResponse($url, $code, $headers)
        {
            return Concrete\Core\Routing\Redirect::createRedirectResponse($url, $code, $headers);
        }

        /**
        * Redirects to a concrete5 resource.
        */
        public static function to()
        {
            return Concrete\Core\Routing\Redirect::to();
        }

        /**
        * Redirect to a page
        */
        public static function page(Concrete\Core\Page\Page $c, $code = 302, $headers = array())
        {
            return Concrete\Core\Routing\Redirect::page($c, $code, $headers);
        }

        /**
        * Redirects to a URL.
        */
        public static function url($url, $code = 302, $headers = array())
        {
            return Concrete\Core\Routing\Redirect::url($url, $code, $headers);
        }

    }

    class RedirectResponse extends \Concrete\Core\Routing\RedirectResponse
    {

        /** @var \Concrete\Core\Routing\RedirectResponse */
        protected static $instance;

        public function setRequest(Concrete\Core\Http\Request $r)
        {
            /** @var Concrete\Core\Routing\RedirectResponse $instance */
            return $instance->setRequest($r);
        }

        public function send()
        {
            /** @var Concrete\Core\Routing\RedirectResponse $instance */
            return $instance->send();
        }

        /**
        * {@inheritdoc}
        */
        public static function create($url = "", $status = 302, $headers = array())
        {
            return Symfony\Component\HttpFoundation\RedirectResponse::create($url, $status, $headers);
        }

        /**
        * Returns the target URL.
        *
        * @return string target URL
        */
        public function getTargetUrl()
        {
            /** @var Symfony\Component\HttpFoundation\RedirectResponse $instance */
            return $instance->getTargetUrl();
        }

        /**
        * Sets the redirect target of this response.
        *
        * @param string  $url     The URL to redirect to
        *
        * @return RedirectResponse The current response.
        *
        * @throws \InvalidArgumentException
        */
        public function setTargetUrl($url)
        {
            /** @var Symfony\Component\HttpFoundation\RedirectResponse $instance */
            return $instance->setTargetUrl($url);
        }

        /**
        * Prepares the Response before it is sent to the client.
        *
        * This method tweaks the Response to ensure that it is
        * compliant with RFC 2616. Most of the changes are based on
        * the Request that is "associated" with this Response.
        *
        * @param Request $request A Request instance
        *
        * @return Response The current response.
        */
        public function prepare(Symfony\Component\HttpFoundation\Request $request)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->prepare($request);
        }

        /**
        * Sends HTTP headers.
        *
        * @return Response
        */
        public function sendHeaders()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->sendHeaders();
        }

        /**
        * Sends content for the current web response.
        *
        * @return Response
        */
        public function sendContent()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->sendContent();
        }

        /**
        * Sets the response content.
        *
        * Valid types are strings, numbers, null, and objects that implement a __toString() method.
        *
        * @param mixed $content Content that can be cast to string
        *
        * @return Response
        *
        * @throws \UnexpectedValueException
        *
        * @api
        */
        public function setContent($content)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setContent($content);
        }

        /**
        * Gets the current response content.
        *
        * @return string Content
        *
        * @api
        */
        public function getContent()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getContent();
        }

        /**
        * Sets the HTTP protocol version (1.0 or 1.1).
        *
        * @param string $version The HTTP protocol version
        *
        * @return Response
        *
        * @api
        */
        public function setProtocolVersion($version)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setProtocolVersion($version);
        }

        /**
        * Gets the HTTP protocol version.
        *
        * @return string The HTTP protocol version
        *
        * @api
        */
        public function getProtocolVersion()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getProtocolVersion();
        }

        /**
        * Sets the response status code.
        *
        * @param int     $code HTTP status code
        * @param mixed   $text HTTP status text
        *
        * If the status text is null it will be automatically populated for the known
        * status codes and left empty otherwise.
        *
        * @return Response
        *
        * @throws \InvalidArgumentException When the HTTP status code is not valid
        *
        * @api
        */
        public function setStatusCode($code, $text = null)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setStatusCode($code, $text);
        }

        /**
        * Retrieves the status code for the current web response.
        *
        * @return int     Status code
        *
        * @api
        */
        public function getStatusCode()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getStatusCode();
        }

        /**
        * Sets the response charset.
        *
        * @param string $charset Character set
        *
        * @return Response
        *
        * @api
        */
        public function setCharset($charset)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setCharset($charset);
        }

        /**
        * Retrieves the response charset.
        *
        * @return string Character set
        *
        * @api
        */
        public function getCharset()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getCharset();
        }

        /**
        * Returns true if the response is worth caching under any circumstance.
        *
        * Responses marked "private" with an explicit Cache-Control directive are
        * considered uncacheable.
        *
        * Responses with neither a freshness lifetime (Expires, max-age) nor cache
        * validator (Last-Modified, ETag) are considered uncacheable.
        *
        * @return bool    true if the response is worth caching, false otherwise
        *
        * @api
        */
        public function isCacheable()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isCacheable();
        }

        /**
        * Returns true if the response is "fresh".
        *
        * Fresh responses may be served from cache without any interaction with the
        * origin. A response is considered fresh when it includes a Cache-Control/max-age
        * indicator or Expires header and the calculated age is less than the freshness lifetime.
        *
        * @return bool    true if the response is fresh, false otherwise
        *
        * @api
        */
        public function isFresh()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isFresh();
        }

        /**
        * Returns true if the response includes headers that can be used to validate
        * the response with the origin server using a conditional GET request.
        *
        * @return bool    true if the response is validateable, false otherwise
        *
        * @api
        */
        public function isValidateable()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isValidateable();
        }

        /**
        * Marks the response as "private".
        *
        * It makes the response ineligible for serving other clients.
        *
        * @return Response
        *
        * @api
        */
        public function setPrivate()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setPrivate();
        }

        /**
        * Marks the response as "public".
        *
        * It makes the response eligible for serving other clients.
        *
        * @return Response
        *
        * @api
        */
        public function setPublic()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setPublic();
        }

        /**
        * Returns true if the response must be revalidated by caches.
        *
        * This method indicates that the response must not be served stale by a
        * cache in any circumstance without first revalidating with the origin.
        * When present, the TTL of the response should not be overridden to be
        * greater than the value provided by the origin.
        *
        * @return bool    true if the response must be revalidated by a cache, false otherwise
        *
        * @api
        */
        public function mustRevalidate()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->mustRevalidate();
        }

        /**
        * Returns the Date header as a DateTime instance.
        *
        * @return \DateTime A \DateTime instance
        *
        * @throws \RuntimeException When the header is not parseable
        *
        * @api
        */
        public function getDate()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getDate();
        }

        /**
        * Sets the Date header.
        *
        * @param \DateTime $date A \DateTime instance
        *
        * @return Response
        *
        * @api
        */
        public function setDate(DateTime $date)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setDate($date);
        }

        /**
        * Returns the age of the response.
        *
        * @return int     The age of the response in seconds
        */
        public function getAge()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getAge();
        }

        /**
        * Marks the response stale by setting the Age header to be equal to the maximum age of the response.
        *
        * @return Response
        *
        * @api
        */
        public function expire()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->expire();
        }

        /**
        * Returns the value of the Expires header as a DateTime instance.
        *
        * @return \DateTime|null A DateTime instance or null if the header does not exist
        *
        * @api
        */
        public function getExpires()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getExpires();
        }

        /**
        * Sets the Expires HTTP header with a DateTime instance.
        *
        * Passing null as value will remove the header.
        *
        * @param \DateTime|null $date A \DateTime instance or null to remove the header
        *
        * @return Response
        *
        * @api
        */
        public function setExpires(DateTime $date = null)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setExpires($date);
        }

        /**
        * Returns the number of seconds after the time specified in the response's Date
        * header when the response should no longer be considered fresh.
        *
        * First, it checks for a s-maxage directive, then a max-age directive, and then it falls
        * back on an expires header. It returns null when no maximum age can be established.
        *
        * @return int|null     Number of seconds
        *
        * @api
        */
        public function getMaxAge()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getMaxAge();
        }

        /**
        * Sets the number of seconds after which the response should no longer be considered fresh.
        *
        * This methods sets the Cache-Control max-age directive.
        *
        * @param int     $value Number of seconds
        *
        * @return Response
        *
        * @api
        */
        public function setMaxAge($value)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setMaxAge($value);
        }

        /**
        * Sets the number of seconds after which the response should no longer be considered fresh by shared caches.
        *
        * This methods sets the Cache-Control s-maxage directive.
        *
        * @param int     $value Number of seconds
        *
        * @return Response
        *
        * @api
        */
        public function setSharedMaxAge($value)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setSharedMaxAge($value);
        }

        /**
        * Returns the response's time-to-live in seconds.
        *
        * It returns null when no freshness information is present in the response.
        *
        * When the responses TTL is <= 0, the response may not be served from cache without first
        * revalidating with the origin.
        *
        * @return int|null     The TTL in seconds
        *
        * @api
        */
        public function getTtl()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getTtl();
        }

        /**
        * Sets the response's time-to-live for shared caches.
        *
        * This method adjusts the Cache-Control/s-maxage directive.
        *
        * @param int     $seconds Number of seconds
        *
        * @return Response
        *
        * @api
        */
        public function setTtl($seconds)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setTtl($seconds);
        }

        /**
        * Sets the response's time-to-live for private/client caches.
        *
        * This method adjusts the Cache-Control/max-age directive.
        *
        * @param int     $seconds Number of seconds
        *
        * @return Response
        *
        * @api
        */
        public function setClientTtl($seconds)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setClientTtl($seconds);
        }

        /**
        * Returns the Last-Modified HTTP header as a DateTime instance.
        *
        * @return \DateTime|null A DateTime instance or null if the header does not exist
        *
        * @throws \RuntimeException When the HTTP header is not parseable
        *
        * @api
        */
        public function getLastModified()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getLastModified();
        }

        /**
        * Sets the Last-Modified HTTP header with a DateTime instance.
        *
        * Passing null as value will remove the header.
        *
        * @param \DateTime|null $date A \DateTime instance or null to remove the header
        *
        * @return Response
        *
        * @api
        */
        public function setLastModified(DateTime $date = null)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setLastModified($date);
        }

        /**
        * Returns the literal value of the ETag HTTP header.
        *
        * @return string|null The ETag HTTP header or null if it does not exist
        *
        * @api
        */
        public function getEtag()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getEtag();
        }

        /**
        * Sets the ETag value.
        *
        * @param string|null $etag The ETag unique identifier or null to remove the header
        * @param bool        $weak Whether you want a weak ETag or not
        *
        * @return Response
        *
        * @api
        */
        public function setEtag($etag = null, $weak = false)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setEtag($etag, $weak);
        }

        /**
        * Sets the response's cache headers (validation and/or expiration).
        *
        * Available options are: etag, last_modified, max_age, s_maxage, private, and public.
        *
        * @param array $options An array of cache options
        *
        * @return Response
        *
        * @throws \InvalidArgumentException
        *
        * @api
        */
        public function setCache(array $options)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setCache($options);
        }

        /**
        * Modifies the response so that it conforms to the rules defined for a 304 status code.
        *
        * This sets the status, removes the body, and discards any headers
        * that MUST NOT be included in 304 responses.
        *
        * @return Response
        *
        * @see http://tools.ietf.org/html/rfc2616#section-10.3.5
        *
        * @api
        */
        public function setNotModified()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setNotModified();
        }

        /**
        * Returns true if the response includes a Vary header.
        *
        * @return bool    true if the response includes a Vary header, false otherwise
        *
        * @api
        */
        public function hasVary()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->hasVary();
        }

        /**
        * Returns an array of header names given in the Vary header.
        *
        * @return array An array of Vary names
        *
        * @api
        */
        public function getVary()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getVary();
        }

        /**
        * Sets the Vary header.
        *
        * @param string|array $headers
        * @param bool         $replace Whether to replace the actual value of not (true by default)
        *
        * @return Response
        *
        * @api
        */
        public function setVary($headers, $replace = true)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setVary($headers, $replace);
        }

        /**
        * Determines if the Response validators (ETag, Last-Modified) match
        * a conditional value specified in the Request.
        *
        * If the Response is not modified, it sets the status code to 304 and
        * removes the actual content by calling the setNotModified() method.
        *
        * @param Request $request A Request instance
        *
        * @return bool    true if the Response validators match the Request, false otherwise
        *
        * @api
        */
        public function isNotModified(Symfony\Component\HttpFoundation\Request $request)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isNotModified($request);
        }

        /**
        * Is response invalid?
        *
        * @return bool
        *
        * @api
        */
        public function isInvalid()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isInvalid();
        }

        /**
        * Is response informative?
        *
        * @return bool
        *
        * @api
        */
        public function isInformational()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isInformational();
        }

        /**
        * Is response successful?
        *
        * @return bool
        *
        * @api
        */
        public function isSuccessful()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isSuccessful();
        }

        /**
        * Is the response a redirect?
        *
        * @return bool
        *
        * @api
        */
        public function isRedirection()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isRedirection();
        }

        /**
        * Is there a client error?
        *
        * @return bool
        *
        * @api
        */
        public function isClientError()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isClientError();
        }

        /**
        * Was there a server side error?
        *
        * @return bool
        *
        * @api
        */
        public function isServerError()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isServerError();
        }

        /**
        * Is the response OK?
        *
        * @return bool
        *
        * @api
        */
        public function isOk()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isOk();
        }

        /**
        * Is the response forbidden?
        *
        * @return bool
        *
        * @api
        */
        public function isForbidden()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isForbidden();
        }

        /**
        * Is the response a not found error?
        *
        * @return bool
        *
        * @api
        */
        public function isNotFound()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isNotFound();
        }

        /**
        * Is the response a redirect of some form?
        *
        * @param string $location
        *
        * @return bool
        *
        * @api
        */
        public function isRedirect($location = null)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isRedirect($location);
        }

        /**
        * Is the response empty?
        *
        * @return bool
        *
        * @api
        */
        public function isEmpty()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isEmpty();
        }

        /**
        * Cleans or flushes output buffers up to target level.
        *
        * Resulting level can be greater than target level if a non-removable buffer has been encountered.
        *
        * @param int  $targetLevel The target output buffering level
        * @param bool $flush       Whether to flush or clean the buffers
        */
        public static function closeOutputBuffers($targetLevel, $flush)
        {
            return Symfony\Component\HttpFoundation\Response::closeOutputBuffers($targetLevel, $flush);
        }

        /**
        * Checks if we need to remove Cache-Control for SSL encrypted downloads when using IE < 9
        *
        * @link http://support.microsoft.com/kb/323308
        */
        protected function ensureIEOverSSLCompatibility(Symfony\Component\HttpFoundation\Request $request)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->ensureIEOverSSLCompatibility($request);
        }

    }

    /**
    * An object that represents a particular request to the Concrete-powered website. The request object then determines what is being requested, based on the path, and presents itself to the rest of the dispatcher (which loads the page, etc...)
    *
    * @package    Core
    * @author     Andrew Embler <andrew@concrete5.org>
    * @category   Concrete
    * @copyright  Copyright (c) 2003-2008 Concrete5. (http://www.concrete5.org)
    * @license    http://www.concrete5.org/license/     MIT License
    *
    */
    class Request extends \Concrete\Core\Http\Request
    {

        /** @var \Concrete\Core\Http\Request */
        protected static $instance;

        /**
        * @return Request
        */
        public static function getInstance()
        {
            return Concrete\Core\Http\Request::getInstance();
        }

        /**
        * @return \Concrete\Core\Page\Page
        */
        public function getCurrentPage()
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->getCurrentPage();
        }

        /**
        * @param \Concrete\Core\Page\Page $c
        */
        public function setCurrentPage(Concrete\Core\Page\Page $c)
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->setCurrentPage($c);
        }

        public function getCustomRequestUser()
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->getCustomRequestUser();
        }

        public function setCustomRequestUser($ui)
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->setCustomRequestUser($ui);
        }

        /**
        * @return bool
        */
        public function hasCustomRequestUser()
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->hasCustomRequestUser();
        }

        public function getCustomRequestDateTime()
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->getCustomRequestDateTime();
        }

        public function setCustomRequestDateTime($date)
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->setCustomRequestDateTime($date);
        }

        /**
        * Determines whether a request matches a particular pattern
        * @param string
        * @return bool
        */
        public function matches($pattern)
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->matches($pattern);
        }

        /**
        * Returns the full path for a request
        * @return string
        */
        public function getPath()
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->getPath();
        }

        /**
        * If no arguments are passed, returns the post array. If a key is passed, it returns the value as it exists in the post array.
        * If a default value is provided and the key does not exist in the POST array, the default value is returned
        *
        * @param string $key
        * @param mixed  $defaultValue
        * @return mixed $value
        */
        public function post($key = null, $defaultValue = null)
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->post($key, $defaultValue);
        }

        /**
        * @param null $key
        * @param null $default_value
        * @return mixed|null
        */
        public function request($key = null, $default_value = null)
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->request($key, $default_value);
        }

        /**
        * @return bool
        */
        public function isPost()
        {
            /** @var Concrete\Core\Http\Request $instance */
            return $instance->isPost();
        }

        /**
        * Sets the parameters for this request.
        *
        * This method also re-initializes all properties.
        *
        * @param array  $query      The GET parameters
        * @param array  $request    The POST parameters
        * @param array  $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
        * @param array  $cookies    The COOKIE parameters
        * @param array  $files      The FILES parameters
        * @param array  $server     The SERVER parameters
        * @param string $content    The raw body data
        *
        * @api
        */
        public function initialize(array $query = array(), array $request = array(), array $attributes = array(), array $cookies = array(), array $files = array(), array $server = array(), $content = null)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }

        /**
        * Creates a new request with values from PHP's super globals.
        *
        * @return Request A new request
        *
        * @api
        */
        public static function createFromGlobals()
        {
            return Symfony\Component\HttpFoundation\Request::createFromGlobals();
        }

        /**
        * Creates a Request based on a given URI and configuration.
        *
        * The information contained in the URI always take precedence
        * over the other information (server and parameters).
        *
        * @param string $uri        The URI
        * @param string $method     The HTTP method
        * @param array  $parameters The query (GET) or request (POST) parameters
        * @param array  $cookies    The request cookies ($_COOKIE)
        * @param array  $files      The request files ($_FILES)
        * @param array  $server     The server parameters ($_SERVER)
        * @param string $content    The raw body data
        *
        * @return Request A Request instance
        *
        * @api
        */
        public static function create($uri, $method = "GET", $parameters = array(), $cookies = array(), $files = array(), $server = array(), $content = null)
        {
            return Symfony\Component\HttpFoundation\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }

        /**
        * Sets a callable able to create a Request instance.
        *
        * This is mainly useful when you need to override the Request class
        * to keep BC with an existing system. It should not be used for any
        * other purpose.
        *
        * @param callable|null $callable A PHP callable
        */
        public static function setFactory($callable)
        {
            return Symfony\Component\HttpFoundation\Request::setFactory($callable);
        }

        /**
        * Clones a request and overrides some of its parameters.
        *
        * @param array $query      The GET parameters
        * @param array $request    The POST parameters
        * @param array $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
        * @param array $cookies    The COOKIE parameters
        * @param array $files      The FILES parameters
        * @param array $server     The SERVER parameters
        *
        * @return Request The duplicated request
        *
        * @api
        */
        public function duplicate(array $query = null, array $request = null, array $attributes = null, array $cookies = null, array $files = null, array $server = null)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->duplicate($query, $request, $attributes, $cookies, $files, $server);
        }

        /**
        * Overrides the PHP global variables according to this request instance.
        *
        * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
        * $_FILES is never override, see rfc1867
        *
        * @api
        */
        public function overrideGlobals()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->overrideGlobals();
        }

        /**
        * Sets a list of trusted proxies.
        *
        * You should only list the reverse proxies that you manage directly.
        *
        * @param array $proxies A list of trusted proxies
        *
        * @api
        */
        public static function setTrustedProxies(array $proxies)
        {
            return Symfony\Component\HttpFoundation\Request::setTrustedProxies($proxies);
        }

        /**
        * Gets the list of trusted proxies.
        *
        * @return array An array of trusted proxies.
        */
        public static function getTrustedProxies()
        {
            return Symfony\Component\HttpFoundation\Request::getTrustedProxies();
        }

        /**
        * Sets a list of trusted host patterns.
        *
        * You should only list the hosts you manage using regexs.
        *
        * @param array $hostPatterns A list of trusted host patterns
        */
        public static function setTrustedHosts(array $hostPatterns)
        {
            return Symfony\Component\HttpFoundation\Request::setTrustedHosts($hostPatterns);
        }

        /**
        * Gets the list of trusted host patterns.
        *
        * @return array An array of trusted host patterns.
        */
        public static function getTrustedHosts()
        {
            return Symfony\Component\HttpFoundation\Request::getTrustedHosts();
        }

        /**
        * Sets the name for trusted headers.
        *
        * The following header keys are supported:
        *
        *  * Request::HEADER_CLIENT_IP:    defaults to X-Forwarded-For   (see getClientIp())
        *  * Request::HEADER_CLIENT_HOST:  defaults to X-Forwarded-Host  (see getClientHost())
        *  * Request::HEADER_CLIENT_PORT:  defaults to X-Forwarded-Port  (see getClientPort())
        *  * Request::HEADER_CLIENT_PROTO: defaults to X-Forwarded-Proto (see getScheme() and isSecure())
        *
        * Setting an empty value allows to disable the trusted header for the given key.
        *
        * @param string $key   The header key
        * @param string $value The header name
        *
        * @throws \InvalidArgumentException
        */
        public static function setTrustedHeaderName($key, $value)
        {
            return Symfony\Component\HttpFoundation\Request::setTrustedHeaderName($key, $value);
        }

        /**
        * Gets the trusted proxy header name.
        *
        * @param string $key The header key
        *
        * @return string The header name
        *
        * @throws \InvalidArgumentException
        */
        public static function getTrustedHeaderName($key)
        {
            return Symfony\Component\HttpFoundation\Request::getTrustedHeaderName($key);
        }

        /**
        * Normalizes a query string.
        *
        * It builds a normalized query string, where keys/value pairs are alphabetized,
        * have consistent escaping and unneeded delimiters are removed.
        *
        * @param string $qs Query string
        *
        * @return string A normalized query string for the Request
        */
        public static function normalizeQueryString($qs)
        {
            return Symfony\Component\HttpFoundation\Request::normalizeQueryString($qs);
        }

        /**
        * Enables support for the _method request parameter to determine the intended HTTP method.
        *
        * Be warned that enabling this feature might lead to CSRF issues in your code.
        * Check that you are using CSRF tokens when required.
        *
        * The HTTP method can only be overridden when the real HTTP method is POST.
        */
        public static function enableHttpMethodParameterOverride()
        {
            return Symfony\Component\HttpFoundation\Request::enableHttpMethodParameterOverride();
        }

        /**
        * Checks whether support for the _method request parameter is enabled.
        *
        * @return bool    True when the _method request parameter is enabled, false otherwise
        */
        public static function getHttpMethodParameterOverride()
        {
            return Symfony\Component\HttpFoundation\Request::getHttpMethodParameterOverride();
        }

        /**
        * Gets a "parameter" value.
        *
        * This method is mainly useful for libraries that want to provide some flexibility.
        *
        * Order of precedence: GET, PATH, POST
        *
        * Avoid using this method in controllers:
        *
        *  * slow
        *  * prefer to get from a "named" source
        *
        * It is better to explicitly get request parameters from the appropriate
        * public property instead (query, attributes, request).
        *
        * @param string  $key     the key
        * @param mixed   $default the default value
        * @param bool    $deep    is parameter deep in multidimensional array
        *
        * @return mixed
        */
        public function get($key, $default = null, $deep = false)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->get($key, $default, $deep);
        }

        /**
        * Gets the Session.
        *
        * @return SessionInterface|null The session
        *
        * @api
        */
        public function getSession()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getSession();
        }

        /**
        * Whether the request contains a Session which was started in one of the
        * previous requests.
        *
        * @return bool
        *
        * @api
        */
        public function hasPreviousSession()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->hasPreviousSession();
        }

        /**
        * Whether the request contains a Session object.
        *
        * This method does not give any information about the state of the session object,
        * like whether the session is started or not. It is just a way to check if this Request
        * is associated with a Session instance.
        *
        * @return bool    true when the Request contains a Session object, false otherwise
        *
        * @api
        */
        public function hasSession()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->hasSession();
        }

        /**
        * Sets the Session.
        *
        * @param SessionInterface $session The Session
        *
        * @api
        */
        public function setSession(Symfony\Component\HttpFoundation\Session\SessionInterface $session)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->setSession($session);
        }

        /**
        * Returns the client IP addresses.
        *
        * In the returned array the most trusted IP address is first, and the
        * least trusted one last. The "real" client IP address is the last one,
        * but this is also the least trusted one. Trusted proxies are stripped.
        *
        * Use this method carefully; you should use getClientIp() instead.
        *
        * @return array The client IP addresses
        *
        * @see getClientIp()
        */
        public function getClientIps()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getClientIps();
        }

        /**
        * Returns the client IP address.
        *
        * This method can read the client IP address from the "X-Forwarded-For" header
        * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
        * header value is a comma+space separated list of IP addresses, the left-most
        * being the original client, and each successive proxy that passed the request
        * adding the IP address where it received the request from.
        *
        * If your reverse proxy uses a different header name than "X-Forwarded-For",
        * ("Client-Ip" for instance), configure it via "setTrustedHeaderName()" with
        * the "client-ip" key.
        *
        * @return string The client IP address
        *
        * @see getClientIps()
        * @see http://en.wikipedia.org/wiki/X-Forwarded-For
        *
        * @api
        */
        public function getClientIp()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getClientIp();
        }

        /**
        * Returns current script name.
        *
        * @return string
        *
        * @api
        */
        public function getScriptName()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getScriptName();
        }

        /**
        * Returns the path being requested relative to the executed script.
        *
        * The path info always starts with a /.
        *
        * Suppose this request is instantiated from /mysite on localhost:
        *
        *  * http://localhost/mysite              returns an empty string
        *  * http://localhost/mysite/about        returns '/about'
        *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
        *  * http://localhost/mysite/about?var=1  returns '/about'
        *
        * @return string The raw path (i.e. not urldecoded)
        *
        * @api
        */
        public function getPathInfo()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getPathInfo();
        }

        /**
        * Returns the root path from which this request is executed.
        *
        * Suppose that an index.php file instantiates this request object:
        *
        *  * http://localhost/index.php         returns an empty string
        *  * http://localhost/index.php/page    returns an empty string
        *  * http://localhost/web/index.php     returns '/web'
        *  * http://localhost/we%20b/index.php  returns '/we%20b'
        *
        * @return string The raw path (i.e. not urldecoded)
        *
        * @api
        */
        public function getBasePath()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getBasePath();
        }

        /**
        * Returns the root URL from which this request is executed.
        *
        * The base URL never ends with a /.
        *
        * This is similar to getBasePath(), except that it also includes the
        * script filename (e.g. index.php) if one exists.
        *
        * @return string The raw URL (i.e. not urldecoded)
        *
        * @api
        */
        public function getBaseUrl()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getBaseUrl();
        }

        /**
        * Gets the request's scheme.
        *
        * @return string
        *
        * @api
        */
        public function getScheme()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getScheme();
        }

        /**
        * Returns the port on which the request is made.
        *
        * This method can read the client port from the "X-Forwarded-Port" header
        * when trusted proxies were set via "setTrustedProxies()".
        *
        * The "X-Forwarded-Port" header must contain the client port.
        *
        * If your reverse proxy uses a different header name than "X-Forwarded-Port",
        * configure it via "setTrustedHeaderName()" with the "client-port" key.
        *
        * @return string
        *
        * @api
        */
        public function getPort()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getPort();
        }

        /**
        * Returns the user.
        *
        * @return string|null
        */
        public function getUser()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getUser();
        }

        /**
        * Returns the password.
        *
        * @return string|null
        */
        public function getPassword()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getPassword();
        }

        /**
        * Gets the user info.
        *
        * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
        */
        public function getUserInfo()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getUserInfo();
        }

        /**
        * Returns the HTTP host being requested.
        *
        * The port name will be appended to the host if it's non-standard.
        *
        * @return string
        *
        * @api
        */
        public function getHttpHost()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getHttpHost();
        }

        /**
        * Returns the requested URI (path and query string).
        *
        * @return string The raw URI (i.e. not URI decoded)
        *
        * @api
        */
        public function getRequestUri()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getRequestUri();
        }

        /**
        * Gets the scheme and HTTP host.
        *
        * If the URL was called with basic authentication, the user
        * and the password are not added to the generated string.
        *
        * @return string The scheme and HTTP host
        */
        public function getSchemeAndHttpHost()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getSchemeAndHttpHost();
        }

        /**
        * Generates a normalized URI (URL) for the Request.
        *
        * @return string A normalized URI (URL) for the Request
        *
        * @see getQueryString()
        *
        * @api
        */
        public function getUri()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getUri();
        }

        /**
        * Generates a normalized URI for the given path.
        *
        * @param string $path A path to use instead of the current one
        *
        * @return string The normalized URI for the path
        *
        * @api
        */
        public function getUriForPath($path)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getUriForPath($path);
        }

        /**
        * Generates the normalized query string for the Request.
        *
        * It builds a normalized query string, where keys/value pairs are alphabetized
        * and have consistent escaping.
        *
        * @return string|null A normalized query string for the Request
        *
        * @api
        */
        public function getQueryString()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getQueryString();
        }

        /**
        * Checks whether the request is secure or not.
        *
        * This method can read the client port from the "X-Forwarded-Proto" header
        * when trusted proxies were set via "setTrustedProxies()".
        *
        * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
        *
        * If your reverse proxy uses a different header name than "X-Forwarded-Proto"
        * ("SSL_HTTPS" for instance), configure it via "setTrustedHeaderName()" with
        * the "client-proto" key.
        *
        * @return bool
        *
        * @api
        */
        public function isSecure()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->isSecure();
        }

        /**
        * Returns the host name.
        *
        * This method can read the client port from the "X-Forwarded-Host" header
        * when trusted proxies were set via "setTrustedProxies()".
        *
        * The "X-Forwarded-Host" header must contain the client host name.
        *
        * If your reverse proxy uses a different header name than "X-Forwarded-Host",
        * configure it via "setTrustedHeaderName()" with the "client-host" key.
        *
        * @return string
        *
        * @throws \UnexpectedValueException when the host name is invalid
        *
        * @api
        */
        public function getHost()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getHost();
        }

        /**
        * Sets the request method.
        *
        * @param string $method
        *
        * @api
        */
        public function setMethod($method)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->setMethod($method);
        }

        /**
        * Gets the request "intended" method.
        *
        * If the X-HTTP-Method-Override header is set, and if the method is a POST,
        * then it is used to determine the "real" intended HTTP method.
        *
        * The _method request parameter can also be used to determine the HTTP method,
        * but only if enableHttpMethodParameterOverride() has been called.
        *
        * The method is always an uppercased string.
        *
        * @return string The request method
        *
        * @api
        *
        * @see getRealMethod
        */
        public function getMethod()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getMethod();
        }

        /**
        * Gets the "real" request method.
        *
        * @return string The request method
        *
        * @see getMethod
        */
        public function getRealMethod()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getRealMethod();
        }

        /**
        * Gets the mime type associated with the format.
        *
        * @param string $format The format
        *
        * @return string The associated mime type (null if not found)
        *
        * @api
        */
        public function getMimeType($format)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getMimeType($format);
        }

        /**
        * Gets the format associated with the mime type.
        *
        * @param string $mimeType The associated mime type
        *
        * @return string|null The format (null if not found)
        *
        * @api
        */
        public function getFormat($mimeType)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getFormat($mimeType);
        }

        /**
        * Associates a format with mime types.
        *
        * @param string       $format    The format
        * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
        *
        * @api
        */
        public function setFormat($format, $mimeTypes)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->setFormat($format, $mimeTypes);
        }

        /**
        * Gets the request format.
        *
        * Here is the process to determine the format:
        *
        *  * format defined by the user (with setRequestFormat())
        *  * _format request parameter
        *  * $default
        *
        * @param string $default The default format
        *
        * @return string The request format
        *
        * @api
        */
        public function getRequestFormat($default = "html")
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getRequestFormat($default);
        }

        /**
        * Sets the request format.
        *
        * @param string $format The request format.
        *
        * @api
        */
        public function setRequestFormat($format)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->setRequestFormat($format);
        }

        /**
        * Gets the format associated with the request.
        *
        * @return string|null The format (null if no content type is present)
        *
        * @api
        */
        public function getContentType()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getContentType();
        }

        /**
        * Sets the default locale.
        *
        * @param string $locale
        *
        * @api
        */
        public function setDefaultLocale($locale)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->setDefaultLocale($locale);
        }

        /**
        * Get the default locale.
        *
        * @return string
        */
        public function getDefaultLocale()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getDefaultLocale();
        }

        /**
        * Sets the locale.
        *
        * @param string $locale
        *
        * @api
        */
        public function setLocale($locale)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->setLocale($locale);
        }

        /**
        * Get the locale.
        *
        * @return string
        */
        public function getLocale()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getLocale();
        }

        /**
        * Checks if the request method is of specified type.
        *
        * @param string $method Uppercase request method (GET, POST etc).
        *
        * @return bool
        */
        public function isMethod($method)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->isMethod($method);
        }

        /**
        * Checks whether the method is safe or not.
        *
        * @return bool
        *
        * @api
        */
        public function isMethodSafe()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->isMethodSafe();
        }

        /**
        * Returns the request body content.
        *
        * @param bool    $asResource If true, a resource will be returned
        *
        * @return string|resource The request body content or a resource to read the body stream.
        *
        * @throws \LogicException
        */
        public function getContent($asResource = false)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getContent($asResource);
        }

        /**
        * Gets the Etags.
        *
        * @return array The entity tags
        */
        public function getETags()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getETags();
        }

        /**
        * @return bool
        */
        public function isNoCache()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->isNoCache();
        }

        /**
        * Returns the preferred language.
        *
        * @param array $locales An array of ordered available locales
        *
        * @return string|null The preferred locale
        *
        * @api
        */
        public function getPreferredLanguage(array $locales = null)
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getPreferredLanguage($locales);
        }

        /**
        * Gets a list of languages acceptable by the client browser.
        *
        * @return array Languages ordered in the user browser preferences
        *
        * @api
        */
        public function getLanguages()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getLanguages();
        }

        /**
        * Gets a list of charsets acceptable by the client browser.
        *
        * @return array List of charsets in preferable order
        *
        * @api
        */
        public function getCharsets()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getCharsets();
        }

        /**
        * Gets a list of encodings acceptable by the client browser.
        *
        * @return array List of encodings in preferable order
        */
        public function getEncodings()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getEncodings();
        }

        /**
        * Gets a list of content types acceptable by the client browser
        *
        * @return array List of content types in preferable order
        *
        * @api
        */
        public function getAcceptableContentTypes()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->getAcceptableContentTypes();
        }

        /**
        * Returns true if the request is a XMLHttpRequest.
        *
        * It works if your JavaScript library set an X-Requested-With HTTP header.
        * It is known to work with common JavaScript frameworks:
        * @link http://en.wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
        *
        * @return bool    true if the request is an XMLHttpRequest, false otherwise
        *
        * @api
        */
        public function isXmlHttpRequest()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->isXmlHttpRequest();
        }

        protected function prepareRequestUri()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->prepareRequestUri();
        }

        /**
        * Prepares the base URL.
        *
        * @return string
        */
        protected function prepareBaseUrl()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->prepareBaseUrl();
        }

        /**
        * Prepares the base path.
        *
        * @return string base path
        */
        protected function prepareBasePath()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->prepareBasePath();
        }

        /**
        * Prepares the path info.
        *
        * @return string path info
        */
        protected function preparePathInfo()
        {
            /** @var Symfony\Component\HttpFoundation\Request $instance */
            return $instance->preparePathInfo();
        }

        /**
        * Initializes HTTP request formats.
        */
        protected static function initializeFormats()
        {
            return Symfony\Component\HttpFoundation\Request::initializeFormats();
        }

    }

    class Response extends \Concrete\Core\Http\Response
    {

        /** @var \Concrete\Core\Http\Response */
        protected static $instance;

        public function send()
        {
            /** @var Concrete\Core\Http\Response $instance */
            return $instance->send();
        }

        /**
        * Factory method for chainability
        *
        * Example:
        *
        *     return Response::create($body, 200)
        *         ->setSharedMaxAge(300);
        *
        * @param mixed   $content The response content, see setContent()
        * @param int     $status  The response status code
        * @param array   $headers An array of response headers
        *
        * @return Response
        */
        public static function create($content = "", $status = 200, $headers = array())
        {
            return Symfony\Component\HttpFoundation\Response::create($content, $status, $headers);
        }

        /**
        * Prepares the Response before it is sent to the client.
        *
        * This method tweaks the Response to ensure that it is
        * compliant with RFC 2616. Most of the changes are based on
        * the Request that is "associated" with this Response.
        *
        * @param Request $request A Request instance
        *
        * @return Response The current response.
        */
        public function prepare(Symfony\Component\HttpFoundation\Request $request)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->prepare($request);
        }

        /**
        * Sends HTTP headers.
        *
        * @return Response
        */
        public function sendHeaders()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->sendHeaders();
        }

        /**
        * Sends content for the current web response.
        *
        * @return Response
        */
        public function sendContent()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->sendContent();
        }

        /**
        * Sets the response content.
        *
        * Valid types are strings, numbers, null, and objects that implement a __toString() method.
        *
        * @param mixed $content Content that can be cast to string
        *
        * @return Response
        *
        * @throws \UnexpectedValueException
        *
        * @api
        */
        public function setContent($content)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setContent($content);
        }

        /**
        * Gets the current response content.
        *
        * @return string Content
        *
        * @api
        */
        public function getContent()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getContent();
        }

        /**
        * Sets the HTTP protocol version (1.0 or 1.1).
        *
        * @param string $version The HTTP protocol version
        *
        * @return Response
        *
        * @api
        */
        public function setProtocolVersion($version)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setProtocolVersion($version);
        }

        /**
        * Gets the HTTP protocol version.
        *
        * @return string The HTTP protocol version
        *
        * @api
        */
        public function getProtocolVersion()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getProtocolVersion();
        }

        /**
        * Sets the response status code.
        *
        * @param int     $code HTTP status code
        * @param mixed   $text HTTP status text
        *
        * If the status text is null it will be automatically populated for the known
        * status codes and left empty otherwise.
        *
        * @return Response
        *
        * @throws \InvalidArgumentException When the HTTP status code is not valid
        *
        * @api
        */
        public function setStatusCode($code, $text = null)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setStatusCode($code, $text);
        }

        /**
        * Retrieves the status code for the current web response.
        *
        * @return int     Status code
        *
        * @api
        */
        public function getStatusCode()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getStatusCode();
        }

        /**
        * Sets the response charset.
        *
        * @param string $charset Character set
        *
        * @return Response
        *
        * @api
        */
        public function setCharset($charset)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setCharset($charset);
        }

        /**
        * Retrieves the response charset.
        *
        * @return string Character set
        *
        * @api
        */
        public function getCharset()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getCharset();
        }

        /**
        * Returns true if the response is worth caching under any circumstance.
        *
        * Responses marked "private" with an explicit Cache-Control directive are
        * considered uncacheable.
        *
        * Responses with neither a freshness lifetime (Expires, max-age) nor cache
        * validator (Last-Modified, ETag) are considered uncacheable.
        *
        * @return bool    true if the response is worth caching, false otherwise
        *
        * @api
        */
        public function isCacheable()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isCacheable();
        }

        /**
        * Returns true if the response is "fresh".
        *
        * Fresh responses may be served from cache without any interaction with the
        * origin. A response is considered fresh when it includes a Cache-Control/max-age
        * indicator or Expires header and the calculated age is less than the freshness lifetime.
        *
        * @return bool    true if the response is fresh, false otherwise
        *
        * @api
        */
        public function isFresh()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isFresh();
        }

        /**
        * Returns true if the response includes headers that can be used to validate
        * the response with the origin server using a conditional GET request.
        *
        * @return bool    true if the response is validateable, false otherwise
        *
        * @api
        */
        public function isValidateable()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isValidateable();
        }

        /**
        * Marks the response as "private".
        *
        * It makes the response ineligible for serving other clients.
        *
        * @return Response
        *
        * @api
        */
        public function setPrivate()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setPrivate();
        }

        /**
        * Marks the response as "public".
        *
        * It makes the response eligible for serving other clients.
        *
        * @return Response
        *
        * @api
        */
        public function setPublic()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setPublic();
        }

        /**
        * Returns true if the response must be revalidated by caches.
        *
        * This method indicates that the response must not be served stale by a
        * cache in any circumstance without first revalidating with the origin.
        * When present, the TTL of the response should not be overridden to be
        * greater than the value provided by the origin.
        *
        * @return bool    true if the response must be revalidated by a cache, false otherwise
        *
        * @api
        */
        public function mustRevalidate()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->mustRevalidate();
        }

        /**
        * Returns the Date header as a DateTime instance.
        *
        * @return \DateTime A \DateTime instance
        *
        * @throws \RuntimeException When the header is not parseable
        *
        * @api
        */
        public function getDate()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getDate();
        }

        /**
        * Sets the Date header.
        *
        * @param \DateTime $date A \DateTime instance
        *
        * @return Response
        *
        * @api
        */
        public function setDate(DateTime $date)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setDate($date);
        }

        /**
        * Returns the age of the response.
        *
        * @return int     The age of the response in seconds
        */
        public function getAge()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getAge();
        }

        /**
        * Marks the response stale by setting the Age header to be equal to the maximum age of the response.
        *
        * @return Response
        *
        * @api
        */
        public function expire()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->expire();
        }

        /**
        * Returns the value of the Expires header as a DateTime instance.
        *
        * @return \DateTime|null A DateTime instance or null if the header does not exist
        *
        * @api
        */
        public function getExpires()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getExpires();
        }

        /**
        * Sets the Expires HTTP header with a DateTime instance.
        *
        * Passing null as value will remove the header.
        *
        * @param \DateTime|null $date A \DateTime instance or null to remove the header
        *
        * @return Response
        *
        * @api
        */
        public function setExpires(DateTime $date = null)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setExpires($date);
        }

        /**
        * Returns the number of seconds after the time specified in the response's Date
        * header when the response should no longer be considered fresh.
        *
        * First, it checks for a s-maxage directive, then a max-age directive, and then it falls
        * back on an expires header. It returns null when no maximum age can be established.
        *
        * @return int|null     Number of seconds
        *
        * @api
        */
        public function getMaxAge()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getMaxAge();
        }

        /**
        * Sets the number of seconds after which the response should no longer be considered fresh.
        *
        * This methods sets the Cache-Control max-age directive.
        *
        * @param int     $value Number of seconds
        *
        * @return Response
        *
        * @api
        */
        public function setMaxAge($value)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setMaxAge($value);
        }

        /**
        * Sets the number of seconds after which the response should no longer be considered fresh by shared caches.
        *
        * This methods sets the Cache-Control s-maxage directive.
        *
        * @param int     $value Number of seconds
        *
        * @return Response
        *
        * @api
        */
        public function setSharedMaxAge($value)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setSharedMaxAge($value);
        }

        /**
        * Returns the response's time-to-live in seconds.
        *
        * It returns null when no freshness information is present in the response.
        *
        * When the responses TTL is <= 0, the response may not be served from cache without first
        * revalidating with the origin.
        *
        * @return int|null     The TTL in seconds
        *
        * @api
        */
        public function getTtl()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getTtl();
        }

        /**
        * Sets the response's time-to-live for shared caches.
        *
        * This method adjusts the Cache-Control/s-maxage directive.
        *
        * @param int     $seconds Number of seconds
        *
        * @return Response
        *
        * @api
        */
        public function setTtl($seconds)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setTtl($seconds);
        }

        /**
        * Sets the response's time-to-live for private/client caches.
        *
        * This method adjusts the Cache-Control/max-age directive.
        *
        * @param int     $seconds Number of seconds
        *
        * @return Response
        *
        * @api
        */
        public function setClientTtl($seconds)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setClientTtl($seconds);
        }

        /**
        * Returns the Last-Modified HTTP header as a DateTime instance.
        *
        * @return \DateTime|null A DateTime instance or null if the header does not exist
        *
        * @throws \RuntimeException When the HTTP header is not parseable
        *
        * @api
        */
        public function getLastModified()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getLastModified();
        }

        /**
        * Sets the Last-Modified HTTP header with a DateTime instance.
        *
        * Passing null as value will remove the header.
        *
        * @param \DateTime|null $date A \DateTime instance or null to remove the header
        *
        * @return Response
        *
        * @api
        */
        public function setLastModified(DateTime $date = null)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setLastModified($date);
        }

        /**
        * Returns the literal value of the ETag HTTP header.
        *
        * @return string|null The ETag HTTP header or null if it does not exist
        *
        * @api
        */
        public function getEtag()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getEtag();
        }

        /**
        * Sets the ETag value.
        *
        * @param string|null $etag The ETag unique identifier or null to remove the header
        * @param bool        $weak Whether you want a weak ETag or not
        *
        * @return Response
        *
        * @api
        */
        public function setEtag($etag = null, $weak = false)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setEtag($etag, $weak);
        }

        /**
        * Sets the response's cache headers (validation and/or expiration).
        *
        * Available options are: etag, last_modified, max_age, s_maxage, private, and public.
        *
        * @param array $options An array of cache options
        *
        * @return Response
        *
        * @throws \InvalidArgumentException
        *
        * @api
        */
        public function setCache(array $options)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setCache($options);
        }

        /**
        * Modifies the response so that it conforms to the rules defined for a 304 status code.
        *
        * This sets the status, removes the body, and discards any headers
        * that MUST NOT be included in 304 responses.
        *
        * @return Response
        *
        * @see http://tools.ietf.org/html/rfc2616#section-10.3.5
        *
        * @api
        */
        public function setNotModified()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setNotModified();
        }

        /**
        * Returns true if the response includes a Vary header.
        *
        * @return bool    true if the response includes a Vary header, false otherwise
        *
        * @api
        */
        public function hasVary()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->hasVary();
        }

        /**
        * Returns an array of header names given in the Vary header.
        *
        * @return array An array of Vary names
        *
        * @api
        */
        public function getVary()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->getVary();
        }

        /**
        * Sets the Vary header.
        *
        * @param string|array $headers
        * @param bool         $replace Whether to replace the actual value of not (true by default)
        *
        * @return Response
        *
        * @api
        */
        public function setVary($headers, $replace = true)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->setVary($headers, $replace);
        }

        /**
        * Determines if the Response validators (ETag, Last-Modified) match
        * a conditional value specified in the Request.
        *
        * If the Response is not modified, it sets the status code to 304 and
        * removes the actual content by calling the setNotModified() method.
        *
        * @param Request $request A Request instance
        *
        * @return bool    true if the Response validators match the Request, false otherwise
        *
        * @api
        */
        public function isNotModified(Symfony\Component\HttpFoundation\Request $request)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isNotModified($request);
        }

        /**
        * Is response invalid?
        *
        * @return bool
        *
        * @api
        */
        public function isInvalid()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isInvalid();
        }

        /**
        * Is response informative?
        *
        * @return bool
        *
        * @api
        */
        public function isInformational()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isInformational();
        }

        /**
        * Is response successful?
        *
        * @return bool
        *
        * @api
        */
        public function isSuccessful()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isSuccessful();
        }

        /**
        * Is the response a redirect?
        *
        * @return bool
        *
        * @api
        */
        public function isRedirection()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isRedirection();
        }

        /**
        * Is there a client error?
        *
        * @return bool
        *
        * @api
        */
        public function isClientError()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isClientError();
        }

        /**
        * Was there a server side error?
        *
        * @return bool
        *
        * @api
        */
        public function isServerError()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isServerError();
        }

        /**
        * Is the response OK?
        *
        * @return bool
        *
        * @api
        */
        public function isOk()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isOk();
        }

        /**
        * Is the response forbidden?
        *
        * @return bool
        *
        * @api
        */
        public function isForbidden()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isForbidden();
        }

        /**
        * Is the response a not found error?
        *
        * @return bool
        *
        * @api
        */
        public function isNotFound()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isNotFound();
        }

        /**
        * Is the response a redirect of some form?
        *
        * @param string $location
        *
        * @return bool
        *
        * @api
        */
        public function isRedirect($location = null)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isRedirect($location);
        }

        /**
        * Is the response empty?
        *
        * @return bool
        *
        * @api
        */
        public function isEmpty()
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->isEmpty();
        }

        /**
        * Cleans or flushes output buffers up to target level.
        *
        * Resulting level can be greater than target level if a non-removable buffer has been encountered.
        *
        * @param int  $targetLevel The target output buffering level
        * @param bool $flush       Whether to flush or clean the buffers
        */
        public static function closeOutputBuffers($targetLevel, $flush)
        {
            return Symfony\Component\HttpFoundation\Response::closeOutputBuffers($targetLevel, $flush);
        }

        /**
        * Checks if we need to remove Cache-Control for SSL encrypted downloads when using IE < 9
        *
        * @link http://support.microsoft.com/kb/323308
        */
        protected function ensureIEOverSSLCompatibility(Symfony\Component\HttpFoundation\Request $request)
        {
            /** @var Symfony\Component\HttpFoundation\Response $instance */
            return $instance->ensureIEOverSSLCompatibility($request);
        }

    }

    class Router extends \Concrete\Core\Routing\Router
    {

        /** @var \Concrete\Core\Routing\Router */
        protected static $instance;

        public function getList()
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->getList();
        }

        public function setRequest(Concrete\Core\Http\Request $req)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->setRequest($req);
        }

        public function register($rtPath, $callback, $rtHandle = null, $additionalAttributes = array())
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->register($rtPath, $callback, $rtHandle, $additionalAttributes);
        }

        public function registerMultiple(array $routes)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->registerMultiple($routes);
        }

        public function execute(Concrete\Core\Routing\Route $route, $parameters)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->execute($route, $parameters);
        }

        /**
        * Used by the theme_paths and site_theme_paths files in config/ to hard coded certain paths to various themes
        * @access public
        * @param $path string
        * @param $theme object, if null site theme is default
        * @return void
        */
        public function setThemeByRoute($path, $theme = null, $wrapper = FILENAME_THEMES_VIEW)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->setThemeByRoute($path, $theme, $wrapper);
        }

        public function setThemesbyRoutes(array $routes)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->setThemesbyRoutes($routes);
        }

        /**
        * This grabs the theme for a particular path, if one exists in the themePaths array
        * @param string $path
        * @return string|boolean
        */
        public function getThemeByRoute($path)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->getThemeByRoute($path);
        }

        public function route($data)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->route($data);
        }

    }

    /**
    *
    * SinglePage extends the page class for those instances of pages that have no type, and are special "single pages"
    * within the system.
    * @package Pages
    *
    */
    class SinglePage extends \Concrete\Core\Page\Single
    {

        /** @var \Concrete\Core\Page\Single */
        protected static $instance;

        public static function getThemeableCorePages()
        {
            return Concrete\Core\Page\Single::getThemeableCorePages();
        }

        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Page\Single::getListByPackage($pkg);
        }

        public static function sanitizePath($path)
        {
            return Concrete\Core\Page\Single::sanitizePath($path);
        }

        public static function getPathToNode($node, $pkg)
        {
            return Concrete\Core\Page\Single::getPathToNode($node, $pkg);
        }

        public static function refresh(Concrete\Core\Page\Page $c)
        {
            return Concrete\Core\Page\Single::refresh($c);
        }

        public static function getByID($cID, $version = "RECENT")
        {
            return Concrete\Core\Page\Single::getByID($cID, $version);
        }

        public static function add($cPath, $pkg = null)
        {
            return Concrete\Core\Page\Single::add($cPath, $pkg);
        }

        public static function getList()
        {
            return Concrete\Core\Page\Single::getList();
        }

    }

    /**
    * Class Stack
    *
    * @package Concrete\Core\Page\Stack
    */
    class Stack extends \Concrete\Core\Page\Stack\Stack
    {

        /** @var \Concrete\Core\Page\Stack\Stack */
        protected static $instance;

        /**
        * @param string $type
        * @return int
        */
        public static function mapImportTextToType($type)
        {
            return Concrete\Core\Page\Stack\Stack::mapImportTextToType($type);
        }

        /**
        * @param $stackName
        * @return Stack
        */
        public static function getOrCreateGlobalArea($stackName)
        {
            return Concrete\Core\Page\Stack\Stack::getOrCreateGlobalArea($stackName);
        }

        /**
        * @param string $stackName
        * @param string $cvID
        * @return Page
        */
        public static function getByName($stackName, $cvID = "RECENT")
        {
            return Concrete\Core\Page\Stack\Stack::getByName($stackName, $cvID);
        }

        /**
        * @param int    $cID
        * @param string $cvID
        * @return bool|Page
        */
        public static function getByID($cID, $cvID = "RECENT")
        {
            return Concrete\Core\Page\Stack\Stack::getByID($cID, $cvID);
        }

        /**
        * @param Stack $stack
        * @return bool
        */
        protected static function isValidStack($stack)
        {
            return Concrete\Core\Page\Stack\Stack::isValidStack($stack);
        }

        /**
        * @param string $stackName
        * @param int    $type
        * @return Page
        */
        public static function addStack($stackName, $type = 0)
        {
            return Concrete\Core\Page\Stack\Stack::addStack($stackName, $type);
        }

        /**
        * @param |\Concrete\Core\Page\Collection $nc
        * @param bool $preserveUserID
        * @return Stack
        */
        public function duplicate($nc = null, $preserveUserID = false)
        {
            /** @var Concrete\Core\Page\Stack\Stack $instance */
            return $instance->duplicate($nc, $preserveUserID);
        }

        /**
        * @return int
        */
        public function getStackType()
        {
            /** @var Concrete\Core\Page\Stack\Stack $instance */
            return $instance->getStackType();
        }

        /**
        * @param $data
        * @return bool
        */
        public function update($data)
        {
            /** @var Concrete\Core\Page\Stack\Stack $instance */
            return $instance->update($data);
        }

        /**
        * @return bool
        */
        public function delete()
        {
            /** @var Concrete\Core\Page\Stack\Stack $instance */
            return $instance->delete();
        }

        /**
        * @return string
        */
        public function getStackName()
        {
            /** @var Concrete\Core\Page\Stack\Stack $instance */
            return $instance->getStackName();
        }

        /**
        * @return bool
        */
        public function display()
        {
            /** @var Concrete\Core\Page\Stack\Stack $instance */
            return $instance->display();
        }

        /**
        * @param Page $pageNode
        */
        public function export($pageNode)
        {
            /** @var Concrete\Core\Page\Stack\Stack $instance */
            return $instance->export($pageNode);
        }

        /**
        * @return bool|string
        */
        public function getStackTypeExportText()
        {
            /** @var Concrete\Core\Page\Stack\Stack $instance */
            return $instance->getStackTypeExportText();
        }

        /**
        * @param string $path /path/to/page
        * @param string $version ACTIVE or RECENT
        * @return Page
        */
        public static function getByPath($path, $version = "RECENT")
        {
            return Concrete\Core\Page\Page::getByPath($path, $version);
        }

        /**
        * @access private
        */
        protected function populatePage($cInfo, $where, $cvID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->populatePage($cInfo, $where, $cvID);
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        /**
        * Return a representation of the Page object as something easily serializable.
        */
        public function getJSONObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getJSONObject();
        }

        /**
        * @return PageController
        */
        public function getPageController()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageController();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        /**
        * Is the page in edit mode
        * @return bool
        */
        public function isEditMode()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isEditMode();
        }

        /**
        * Get the package ID for a page (page thats added by a package) (returns 0 if its not in a package)
        * @return int
        */
        public function getPackageID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPackageID();
        }

        /**
        * Get the package handle for a page (page thats added by a package)
        * @return string
        */
        public function getPackageHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPackageHandle();
        }

        /**
        * Returns 1 if the page is in arrange mode
        * @return bool
        */
        public function isArrangeMode()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isArrangeMode();
        }

        /**
        * Forces the page to be checked in if its checked out
        */
        public function forceCheckIn()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->forceCheckIn();
        }

        /**
        * Checks if the page is a dashboard page, returns true if it is
        * @return bool
        */
        public function isAdminArea()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isAdminArea();
        }

        /**
        * Uses a Request object to determine which page to load. queries by path and then
        * by cID
        */
        public static function getFromRequest(Concrete\Core\Http\Request $request)
        {
            return Concrete\Core\Page\Page::getFromRequest($request);
        }

        public function processArrangement($area_id, $moved_block_id, $block_order)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->processArrangement($area_id, $moved_block_id, $block_order);
        }

        /**
        * checks if the page is checked out, if it is return true
        * @return bool
        */
        public function isCheckedOut()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isCheckedOut();
        }

        /**
        * Gets the user that is editing the current page.
        * $return string $name
        */
        public function getCollectionCheckedOutUserName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionCheckedOutUserName();
        }

        /**
        * Checks if the page is checked out by the current user
        * @return bool
        */
        public function isCheckedOutByMe()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isCheckedOutByMe();
        }

        /**
        * Checks if the page is a single page
        * @return bool
        */
        public function isGeneratedCollection()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isGeneratedCollection();
        }

        public function assignPermissions($userOrGroup, $permissions = array(), $accessType = Concrete\Core\Permission\Key\PageKey::ACCESS_TYPE_INCLUDE)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->assignPermissions($userOrGroup, $permissions, $accessType);
        }

        public function removePermissions($userOrGroup, $permissions = array())
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->removePermissions($userOrGroup, $permissions);
        }

        public static function getDrafts()
        {
            return Concrete\Core\Page\Page::getDrafts();
        }

        public function isPageDraft()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isPageDraft();
        }

        public function setController($controller)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setController($controller);
        }

        /**
        * @deprecated
        */
        public function getController()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getController();
        }

        /**
        * @private
        */
        public function assignPermissionSet($px)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->assignPermissionSet($px);
        }

        /**
        * Make an alias to a page
        * @param Collection $c
        * @return int $newCID
        */
        public function addCollectionAlias($c)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->addCollectionAlias($c);
        }

        /**
        * Update the name, link, and to open in a new window for an external link
        * @param string $cName
        * @param string $cLink
        * @param bool $newWindow
        */
        public function updateCollectionAliasExternal($cName, $cLink, $newWindow = 0)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->updateCollectionAliasExternal($cName, $cLink, $newWindow);
        }

        /**
        * Add a new external link
        * @param string $cName
        * @param string $cLink
        * @param bool $newWindow
        * @return int $newCID
        */
        public function addCollectionAliasExternal($cName, $cLink, $newWindow = 0)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->addCollectionAliasExternal($cName, $cLink, $newWindow);
        }

        /**
        * Check if a page is a single page that is in the core (/concrete directory)
        * @return bool
        */
        public function isSystemPage()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isSystemPage();
        }

        /**
        * Gets the icon for a page (also fires the on_page_get_icon event)
        * @return string $icon Path to the icon
        */
        public function getCollectionIcon()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionIcon();
        }

        /**
        * Remove an external link/alias
        * @return int $cIDRedir cID for the original page if the page was an alias
        */
        public function removeThisAlias()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->removeThisAlias();
        }

        public function populateRecursivePages($pages, $pageRow, $cParentID, $level, $includeThisPage = true)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->populateRecursivePages($pages, $pageRow, $cParentID, $level, $includeThisPage);
        }

        public function queueForDeletionSort($a, $b)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->queueForDeletionSort($a, $b);
        }

        public function queueForDuplicationSort($a, $b)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->queueForDuplicationSort($a, $b);
        }

        public function queueForDeletion()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->queueForDeletion();
        }

        public function queueForDeletionRequest()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->queueForDeletionRequest();
        }

        public function queueForDuplication($destination, $includeParent = true)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->queueForDuplication($destination, $includeParent);
        }

        /**
        * Returns the uID for a page that is checked out
        * @return int
        */
        public function getCollectionCheckedOutUserID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionCheckedOutUserID();
        }

        /**
        * Returns the path for the current page
        * @return string
        */
        public function getCollectionPath()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionPath();
        }

        /**
        * Returns the PagePath object for the current page.
        */
        public function getCollectionPathObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionPathObject();
        }

        /**
        * Adds a non-canonical page path to the current page.
        */
        public function addAdditionalPagePath($cPath, $commit = true)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->addAdditionalPagePath($cPath, $commit);
        }

        /**
        * Sets the canonical page path for a page.
        * @return void
        */
        public function setCanonicalPagePath($cPath)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setCanonicalPagePath($cPath);
        }

        public function getAdditionalPagePaths()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getAdditionalPagePaths();
        }

        /**
        * Clears all additional page paths for a page.
        */
        public function clearAdditionalPagePaths()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->clearAdditionalPagePaths();
        }

        /**
        * Returns full url for the current page
        * @return string
        */
        public function getCollectionLink($appendBaseURL = false, $ignoreUrlRewriting = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionLink($appendBaseURL, $ignoreUrlRewriting);
        }

        /**
        * Returns the path for a page from its cID
        * @param int cID
        * @return string $path
        */
        public static function getCollectionPathFromID($cID)
        {
            return Concrete\Core\Page\Page::getCollectionPathFromID($cID);
        }

        /**
        * Returns the uID for a page ownder
        * @return int
        */
        public function getCollectionUserID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionUserID();
        }

        /**
        * Returns the page's handle
        * @return string
        */
        public function getCollectionHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionHandle();
        }

        /**
        * @deprecated
        */
        public function getCollectionTypeName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionTypeName();
        }

        public function getPageTypeName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTypeName();
        }

        /**
        * @deprecated
        */
        public function getCollectionTypeID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionTypeID();
        }

        /**
        * Returns the Collection Type ID
        * @return int
        */
        public function getPageTypeID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTypeID();
        }

        public function getPageTypeObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTypeObject();
        }

        /**
        * Returns the Page Template ID
        * @return int
        */
        public function getPageTemplateID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTemplateID();
        }

        /**
        * Returns the Page Template Object
        * @return PageTemplate
        */
        public function getPageTemplateObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTemplateObject();
        }

        /**
        * Returns the Page Template handle
        * @return string
        */
        public function getPageTemplateHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTemplateHandle();
        }

        /**
        * Returns the Collection Type handle
        * @return string
        */
        public function getPageTypeHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageTypeHandle();
        }

        public function getCollectionTypeHandle()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionTypeHandle();
        }

        /**
        * Returns theme id for the collection
        * @return int
        */
        public function getCollectionThemeID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionThemeID();
        }

        /**
        * Check if a block is an alias from a page default
        * @param Block $b
        * @return bool
        */
        public function isBlockAliasedFromMasterCollection($b)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isBlockAliasedFromMasterCollection($b);
        }

        /**
        * Returns Collection's theme object
        * @return PageTheme
        */
        public function getCollectionThemeObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionThemeObject();
        }

        /**
        * Returns the page's name
        * @return string
        */
        public function getCollectionName()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionName();
        }

        /**
        * Returns the collection ID for the aliased page (returns 0 unless used on an actual alias)
        * @return int
        */
        public function getCollectionPointerID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionPointerID();
        }

        /**
        * Returns link for the aliased page
        * @return string
        */
        public function getCollectionPointerExternalLink()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionPointerExternalLink();
        }

        /**
        * Returns if the alias opens in a new window
        * @return bool
        */
        public function openCollectionPointerExternalLinkInNewWindow()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->openCollectionPointerExternalLinkInNewWindow();
        }

        /**
        * Checks to see if the page is an alias
        * @return bool
        */
        public function isAlias()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isAlias();
        }

        /**
        * Checks if a page is an external link
        * @return bool
        */
        public function isExternalLink()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isExternalLink();
        }

        /**
        * Get the original cID of a page
        * @return int
        */
        public function getCollectionPointerOriginalID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionPointerOriginalID();
        }

        /**
        * Get the file name of a page (single pages)
        * @return string
        */
        public function getCollectionFilename()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionFilename();
        }

        /**
        * Gets the date a the current version was made public,
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getCollectionDatePublic()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionDatePublic();
        }

        /**
        * Get the description of a page
        * @return string
        */
        public function getCollectionDescription()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionDescription();
        }

        /**
        * Gets the cID of the page's parent
        * @return int
        */
        public function getCollectionParentID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionParentID();
        }

        /**
        * Get the Parent cID from a page by using a cID
        * @param int $cID
        * @return int
        */
        public function getCollectionParentIDFromChildID($cID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionParentIDFromChildID($cID);
        }

        /**
        * Returns an array of this cParentID and aliased parentIDs
        * @return array $cID
        */
        public function getCollectionParentIDs()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionParentIDs();
        }

        /**
        * Checks if a page is a page default
        * @return bool
        */
        public function isMasterCollection()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isMasterCollection();
        }

        /**
        * Gets the template permissions
        * @return string
        */
        public function overrideTemplatePermissions()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->overrideTemplatePermissions();
        }

        /**
        * Gets the position of the page in the sitemap
        * @return int
        */
        public function getCollectionDisplayOrder()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionDisplayOrder();
        }

        /**
        * Set the theme for a page using the page object
        * @param PageTheme $pl
        */
        public function setTheme($pl)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setTheme($pl);
        }

        /**
        * Set the theme for a page using the page object
        * @param PageType $pl
        */
        public function setPageType(Concrete\Core\Page\Type\Type $type = null)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPageType($type);
        }

        /**
        * Set the permissions of sub-collections added beneath this permissions to inherit from the template
        */
        public function setPermissionsInheritanceToTemplate()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPermissionsInheritanceToTemplate();
        }

        /**
        * Set the permissions of sub-collections added beneath this permissions to inherit from the parent
        */
        public function setPermissionsInheritanceToOverride()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPermissionsInheritanceToOverride();
        }

        public function getPermissionsCollectionID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionsCollectionID();
        }

        public function getCollectionInheritance()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionInheritance();
        }

        public function getParentPermissionsCollectionID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getParentPermissionsCollectionID();
        }

        public function getPermissionsCollectionObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPermissionsCollectionObject();
        }

        /**
        * Given the current page's template and page type, we return the master page
        */
        public function getMasterCollectionID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getMasterCollectionID();
        }

        public function getOriginalCollectionID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getOriginalCollectionID();
        }

        public function getNumChildren()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getNumChildren();
        }

        public function getNumChildrenDirect()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getNumChildrenDirect();
        }

        /**
        * Returns the first child of the current page, or null if there is no child
        * @param string $sortColumn
        * @return Page
        */
        public function getFirstChild($sortColumn = "cDisplayOrder asc", $excludeSystemPages = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getFirstChild($sortColumn, $excludeSystemPages);
        }

        public function getCollectionChildrenArray($oneLevelOnly = 0)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionChildrenArray($oneLevelOnly);
        }

        /**
        * Returns the immediate children of the current page.
        */
        public function getCollectionChildren()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionChildren();
        }

        public function _getNumChildren($cID, $oneLevelOnly = 0, $sortColumn = "cDisplayOrder asc")
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->_getNumChildren($cID, $oneLevelOnly, $sortColumn);
        }

        public function canMoveCopyTo($cobj)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->canMoveCopyTo($cobj);
        }

        public function updateCollectionName($name)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->updateCollectionName($name);
        }

        public function hasPageThemeCustomizations()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->hasPageThemeCustomizations();
        }

        public function resetCustomThemeStyles()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->resetCustomThemeStyles();
        }

        public function setCustomStyleObject(Concrete\Core\Page\Theme\Theme $pt, Concrete\Core\StyleCustomizer\Style\ValueList $valueList, $selectedPreset = false, $customCssRecord = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setCustomStyleObject($pt, $valueList, $selectedPreset, $customCssRecord);
        }

        public function getPageWrapperClass()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageWrapperClass();
        }

        public function writePageThemeCustomizations()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->writePageThemeCustomizations();
        }

        public static function resetAllCustomStyles()
        {
            return Concrete\Core\Page\Page::resetAllCustomStyles();
        }

        public function clearPagePermissions()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->clearPagePermissions();
        }

        public function inheritPermissionsFromParent()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->inheritPermissionsFromParent();
        }

        public function inheritPermissionsFromDefaults()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->inheritPermissionsFromDefaults();
        }

        public function setPermissionsToManualOverride()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPermissionsToManualOverride();
        }

        public function rescanAreaPermissions()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->rescanAreaPermissions();
        }

        public function setOverrideTemplatePermissions($cOverrideTemplatePermissions)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setOverrideTemplatePermissions($cOverrideTemplatePermissions);
        }

        public function updatePermissionsCollectionID($cParentIDString, $npID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->updatePermissionsCollectionID($cParentIDString, $npID);
        }

        public function acquireAreaPermissions($permissionsCollectionID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->acquireAreaPermissions($permissionsCollectionID);
        }

        public function acquirePagePermissions($permissionsCollectionID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->acquirePagePermissions($permissionsCollectionID);
        }

        public function updateGroupsSubCollection($cParentIDString)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->updateGroupsSubCollection($cParentIDString);
        }

        public function addBlock($bt, $a, $data)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->addBlock($bt, $a, $data);
        }

        public function move($nc)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->move($nc);
        }

        public function duplicateAll($nc, $preserveUserID = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->duplicateAll($nc, $preserveUserID);
        }

        /**
        * @access private
        **/
        public function _duplicateAll($cParent, $cNewParent, $preserveUserID = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->_duplicateAll($cParent, $cNewParent, $preserveUserID);
        }

        public function moveToTrash()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->moveToTrash();
        }

        public function rescanChildrenDisplayOrder()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->rescanChildrenDisplayOrder();
        }

        public function getNextSubPageDisplayOrder()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getNextSubPageDisplayOrder();
        }

        /**
        * Recalculates the canonical page path for the current page, based on its current version, URL slug, etc..
        */
        public function rescanCollectionPath()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->rescanCollectionPath();
        }

        /**
        * For the curret page, return the text that will be used for that pages canonical path. This happens before
        * any uniqueness checks get run.
        * @return string
        */
        protected function computeCanonicalPagePath()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->computeCanonicalPagePath();
        }

        public function updateDisplayOrder($do, $cID = 0)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->updateDisplayOrder($do, $cID);
        }

        public function movePageDisplayOrderToTop()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->movePageDisplayOrderToTop();
        }

        public function movePageDisplayOrderToBottom()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->movePageDisplayOrderToBottom();
        }

        public function movePageDisplayOrderToSibling(Concrete\Core\Page\Page $c, $position = "before")
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->movePageDisplayOrderToSibling($c, $position);
        }

        public function rescanSystemPageStatus()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->rescanSystemPageStatus();
        }

        public function isInTrash()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isInTrash();
        }

        public function moveToRoot()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->moveToRoot();
        }

        public function deactivate()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->deactivate();
        }

        public function activate()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->activate();
        }

        public function isActive()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->isActive();
        }

        public function setPageIndexScore($score)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPageIndexScore($score);
        }

        public function getPageIndexScore()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageIndexScore();
        }

        public function getPageIndexContent()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageIndexContent();
        }

        public function _associateMasterCollectionBlocks($newCID, $masterCID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->_associateMasterCollectionBlocks($newCID, $masterCID);
        }

        public function _associateMasterCollectionAttributes($newCID, $masterCID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->_associateMasterCollectionAttributes($newCID, $masterCID);
        }

        /**
        * Adds the home page to the system. Typically used only by the installation program.
        * @return page
        **/
        public static function addHomePage()
        {
            return Concrete\Core\Page\Page::addHomePage();
        }

        /**
        * Adds a new page of a certain type, using a passed associate array to setup value. $data may contain any or all of the following:
        * "uID": User ID of the page's owner
        * "pkgID": Package ID the page belongs to
        * "cName": The name of the page
        * "cHandle": The handle of the page as used in the path
        * "cDatePublic": The date assigned to the page
        * @param \Concrete\Core\Page\Type\Type $pt
        * @param array $data
        * @return page
        **/
        public function add($pt, $data, $template = false)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->add($pt, $data, $template);
        }

        protected function acquireAreaStylesFromDefaults(Concrete\Core\Page\Template $template)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->acquireAreaStylesFromDefaults($template);
        }

        public function getCustomStyleObject()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCustomStyleObject();
        }

        public function getCollectionFullPageCaching()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionFullPageCaching();
        }

        public function getCollectionFullPageCachingLifetime()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionFullPageCachingLifetime();
        }

        public function getCollectionFullPageCachingLifetimeCustomValue()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionFullPageCachingLifetimeCustomValue();
        }

        public function getCollectionFullPageCachingLifetimeValue()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getCollectionFullPageCachingLifetimeValue();
        }

        public function addStatic($data)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->addStatic($data);
        }

        public static function getCurrentPage()
        {
            return Concrete\Core\Page\Page::getCurrentPage();
        }

        /**
        * Returns the total number of page views for a specific page
        */
        public function getTotalPageViews($date = null)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getTotalPageViews($date);
        }

        public function getPageDraftTargetParentPageID()
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageDraftTargetParentPageID();
        }

        public function setPageDraftTargetParentPageID($cParentID)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->setPageDraftTargetParentPageID($cParentID);
        }

        /**
        * Gets a pages statistics
        */
        public function getPageStatistics($limit = 20)
        {
            /** @var Concrete\Core\Page\Page $instance */
            return $instance->getPageStatistics($limit);
        }

        public static function reindexPendingPages()
        {
            return Concrete\Core\Page\Collection\Collection::reindexPendingPages();
        }

        public static function getByHandle($handle)
        {
            return Concrete\Core\Page\Collection\Collection::getByHandle($handle);
        }

        public function addCollection($data)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->addCollection($data);
        }

        public function loadVersionObject($cvID = "ACTIVE")
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->loadVersionObject($cvID);
        }

        public function getVersionToModify()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getVersionToModify();
        }

        public function getVersionObject()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getVersionObject();
        }

        public function cloneVersion($versionComments)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->cloneVersion($versionComments);
        }

        public function getCollectionID()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionID();
        }

        public function getNextVersionComments()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getNextVersionComments();
        }

        public function getFeatureAssignments()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getFeatureAssignments();
        }

        /**
        * Returns the value of the attribute with the handle $ak
        * of the current object.
        *
        * $displayMode makes it possible to get the correct output
        * value. When you need the raw attribute value or object, use
        * this:
        * <code>
        * $c = Page::getCurrentPage();
        * $attributeValue = $c->getAttribute('attribute_handle');
        * </code>
        *
        * But if you need the formatted output supported by some
        * attribute, use this:
        * <code>
        * $c = Page::getCurrentPage();
        * $attributeValue = $c->getAttribute('attribute_handle', 'display');
        * </code>
        *
        * An attribute type like "date" will then return the date in
        * the correct format just like other attributes will show
        * you a nicely formatted output and not just a simple value
        * or object.
        *
        *
        * @param string|object $akHandle
        * @param boolean       $displayMode
        * @return type
        */
        public function getAttribute($akHandle, $displayMode = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getAttribute($akHandle, $displayMode);
        }

        public function getCollectionAttributeValue($ak)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionAttributeValue($ak);
        }

        public function clearCollectionAttributes($retainAKIDs = array())
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->clearCollectionAttributes($retainAKIDs);
        }

        public function getVersionID()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getVersionID();
        }

        public function reindex($index = false, $actuallyDoReindex = true)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->reindex($index, $actuallyDoReindex);
        }

        public function clearAttribute($ak)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->clearAttribute($ak);
        }

        public function getAttributeValueObject($ak, $createIfNotFound = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getAttributeValueObject($ak, $createIfNotFound);
        }

        public function getSetCollectionAttributes()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getSetCollectionAttributes();
        }

        public function addAttribute($ak, $value)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->addAttribute($ak, $value);
        }

        public function setAttribute($ak, $value)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->setAttribute($ak, $value);
        }

        /**
        * @param string $arHandle
        * @return Area
        */
        public function getArea($arHandle)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getArea($arHandle);
        }

        public function hasAliasedContent()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->hasAliasedContent();
        }

        public function getCollectionDateLastModified()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionDateLastModified();
        }

        public function getCollectionDateAdded()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionDateAdded();
        }

        /**
        * Retrieves all custom style rules that should be inserted into the header on a page, whether they are defined in areas
        * or blocks
        */
        public function outputCustomStyleHeaderItems($return = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->outputCustomStyleHeaderItems($return);
        }

        public function getAreaCustomStyle($area, $force = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getAreaCustomStyle($area, $force);
        }

        public function resetAreaCustomStyle($area)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->resetAreaCustomStyle($area);
        }

        public function setCustomStyleSet($area, $set)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->setCustomStyleSet($area, $set);
        }

        public function relateVersionEdits($oc)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->relateVersionEdits($oc);
        }

        public function rescanDisplayOrder($areaName)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->rescanDisplayOrder($areaName);
        }

        public function refreshCache()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->refreshCache();
        }

        public function getGlobalBlocks()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getGlobalBlocks();
        }

        /**
        * List the blocks in a collection or area within a collection
        *
        * @param bool|string $arHandle . If specified, returns just the blocks in an area
        * @return array
        */
        public function getBlocks($arHandle = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getBlocks($arHandle);
        }

        /**
        * List the block IDs in a collection or area within a collection
        *
        * @param bool|string $arHandle . If specified, returns just the blocks in an area
        * @return array
        */
        public function getBlockIDs($arHandle = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getBlockIDs($arHandle);
        }

        public function getCollectionAreaDisplayOrder($arHandle, $ignoreVersions = false)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->getCollectionAreaDisplayOrder($arHandle, $ignoreVersions);
        }

        public function addFeature(Concrete\Core\Feature\Feature $fe)
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->addFeature($fe);
        }

        public function markModified()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->markModified();
        }

        public function duplicateCollection()
        {
            /** @var Concrete\Core\Page\Collection\Collection $instance */
            return $instance->duplicateCollection();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class StackList extends \Concrete\Core\Page\Stack\StackList
    {

        /** @var \Concrete\Core\Page\Stack\StackList */
        protected static $instance;

        public function filterByGlobalAreas()
        {
            /** @var Concrete\Core\Page\Stack\StackList $instance */
            return $instance->filterByGlobalAreas();
        }

        public function filterByUserAdded()
        {
            /** @var Concrete\Core\Page\Stack\StackList $instance */
            return $instance->filterByUserAdded();
        }

        public static function export(SimpleXMLElement $x)
        {
            return Concrete\Core\Page\Stack\StackList::export($x);
        }

        public function get($itemsToGet = 0, $offset = 0)
        {
            /** @var Concrete\Core\Page\Stack\StackList $instance */
            return $instance->get($itemsToGet, $offset);
        }

        public function setViewPagePermissionKeyHandle($pkHandle)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->setViewPagePermissionKeyHandle($pkHandle);
        }

        public function includeInactivePages()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->includeInactivePages();
        }

        public function ignorePermissions()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->ignorePermissions();
        }

        public function ignoreAliases()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->ignoreAliases();
        }

        public function includeSystemPages()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->includeSystemPages();
        }

        public function displayUnapprovedPages()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->displayUnapprovedPages();
        }

        public function isIndexedSearch()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->isIndexedSearch();
        }

        /**
        * Filters by "keywords" (which searches everything including filenames, title, tags, users who uploaded the file, tags)
        */
        public function filterByKeywords($keywords, $simple = false)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByKeywords($keywords, $simple);
        }

        public function filterByName($name, $exact = false)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByName($name, $exact);
        }

        public function filterByPath($path, $includeAllChildren = true)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByPath($path, $includeAllChildren);
        }

        /**
        * Sets up a list to only return items the proper user can access
        */
        public function setupPermissions()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->setupPermissions();
        }

        public function sortByRelevance()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->sortByRelevance();
        }

        /**
        * Sorts this list by display order
        */
        public function sortByDisplayOrder()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->sortByDisplayOrder();
        }

        /**
        * Sorts this list by display order descending
        */
        public function sortByDisplayOrderDescending()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->sortByDisplayOrderDescending();
        }

        public function sortByCollectionIDAscending()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->sortByCollectionIDAscending();
        }

        /**
        * Sorts this list by public date ascending order
        */
        public function sortByPublicDate()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->sortByPublicDate();
        }

        /**
        * Sorts this list by name
        */
        public function sortByName()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->sortByName();
        }

        /**
        * Sorts this list by name descending order
        */
        public function sortByNameDescending()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->sortByNameDescending();
        }

        /**
        * Sorts this list by public date descending order
        */
        public function sortByPublicDateDescending()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->sortByPublicDateDescending();
        }

        /**
        * Sets the parent ID that we will grab pages from.
        * @param mixed $cParentID
        */
        public function filterByParentID($cParentID)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByParentID($cParentID);
        }

        /**
        * Filters by type of collection (using the ID field)
        * @param mixed $ptID
        */
        public function filterByPageTypeID($ptID)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByPageTypeID($ptID);
        }

        /**
        * @deprecated
        */
        public function filterByCollectionTypeID($ctID)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByCollectionTypeID($ctID);
        }

        /**
        * Filters by user ID of collection (using the uID field)
        * @param mixed $uID
        */
        public function filterByUserID($uID)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByUserID($uID);
        }

        public function filterByIsApproved($cvIsApproved)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByIsApproved($cvIsApproved);
        }

        public function filterByIsAlias($ia)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByIsAlias($ia);
        }

        /**
        * Filters by type of collection (using the handle field)
        * @param mixed $ptHandle
        */
        public function filterByPageTypeHandle($ptHandle)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByPageTypeHandle($ptHandle);
        }

        public function filterByCollectionTypeHandle($ctHandle)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByCollectionTypeHandle($ctHandle);
        }

        /**
        * Filters by date added
        * @param string $date
        */
        public function filterByDateAdded($date, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByDateAdded($date, $comparison);
        }

        public function filterByNumberOfChildren($num, $comparison = ">")
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByNumberOfChildren($num, $comparison);
        }

        public function filterByDateLastModified($date, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByDateLastModified($date, $comparison);
        }

        /**
        * Filters by public date
        * @param string $date
        */
        public function filterByPublicDate($date, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterByPublicDate($date, $comparison);
        }

        public function filterBySelectAttribute($akHandle, $value)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->filterBySelectAttribute($akHandle, $value);
        }

        /**
        * If true, pages will be checked for permissions prior to being returned
        * @param bool $checkForPermissions
        */
        public function displayOnlyPermittedPages($checkForPermissions)
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->displayOnlyPermittedPages($checkForPermissions);
        }

        protected function setBaseQuery($additionalFields = "")
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->setBaseQuery($additionalFields);
        }

        protected function setupSystemPagesToExclude()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->setupSystemPagesToExclude();
        }

        protected function loadPageID($cID, $versionOrig = "RECENT")
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->loadPageID($cID, $versionOrig);
        }

        public function getTotal()
        {
            /** @var Concrete\Core\Legacy\PageList $instance */
            return $instance->getTotal();
        }

        public function debug($dbg = true)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->debug($dbg);
        }

        protected function setQuery($query)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setQuery($query);
        }

        protected function getQuery()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getQuery();
        }

        public function addToQuery($query)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->addToQuery($query);
        }

        protected function setupAutoSort()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupAutoSort();
        }

        protected function executeBase()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->executeBase();
        }

        protected function setupSortByString()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupSortByString();
        }

        protected function setupAttributeSort()
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupAttributeSort();
        }

        /**
        * Adds a filter to this item list
        */
        public function filter($column, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->filter($column, $value, $comparison);
        }

        public function getSearchResultsClass($field)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getSearchResultsClass($field);
        }

        public function sortBy($key, $dir = "asc")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->sortBy($key, $dir);
        }

        public function groupBy($key)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->groupBy($key);
        }

        public function having($column, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->having($column, $value, $comparison);
        }

        public function getSortByURL($column, $dir = "asc", $baseURL = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->getSortByURL($column, $dir, $baseURL, $additionalVars);
        }

        protected function setupAttributeFilters($join)
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->setupAttributeFilters($join);
        }

        public function filterByAttribute($column, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Legacy\DatabaseItemList $instance */
            return $instance->filterByAttribute($column, $value, $comparison);
        }

        public function enableStickySearchRequest($namespace = false)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->enableStickySearchRequest($namespace);
        }

        public function getQueryStringSortVariable()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getQueryStringSortVariable();
        }

        public function getQueryStringSortDirectionVariable()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getQueryStringSortDirectionVariable();
        }

        protected function getStickySearchNameSpace()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getStickySearchNameSpace();
        }

        public function resetSearchRequest($namespace = "")
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->resetSearchRequest($namespace);
        }

        public function addToSearchRequest($key, $value)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->addToSearchRequest($key, $value);
        }

        public function getSearchRequest()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSearchRequest();
        }

        public function setItemsPerPage($num)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setItemsPerPage($num);
        }

        public function getItemsPerPage()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getItemsPerPage();
        }

        public function setItems($items)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setItems($items);
        }

        protected function loadQueryStringPagingVariable()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->loadQueryStringPagingVariable();
        }

        public function setNameSpace($ns)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setNameSpace($ns);
        }

        /**
        * Returns an array of object by "page"
        */
        public function getPage($page = false)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getPage($page);
        }

        protected function setCurrentPage($page = false)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->setCurrentPage($page);
        }

        /**
        * Displays summary text about a list
        */
        public function displaySummary($right_content = "")
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->displaySummary($right_content);
        }

        public function isActiveSortColumn($column)
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->isActiveSortColumn($column);
        }

        public function getActiveSortColumn()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getActiveSortColumn();
        }

        public function getActiveSortDirection()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getActiveSortDirection();
        }

        public function requiresPaging()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->requiresPaging();
        }

        public function getPagination($url = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getPagination($url, $additionalVars);
        }

        /**
        * Gets paging that works in our new format */
        public function displayPagingV2($script = false, $return = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->displayPagingV2($script, $return, $additionalVars);
        }

        /**
        * Gets standard HTML to display paging */
        public function displayPaging($script = false, $return = false, $additionalVars = array())
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->displayPaging($script, $return, $additionalVars);
        }

        /**
        * Returns an object with properties useful for paging
        */
        public function getSummary()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSummary();
        }

        public function getSortBy()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSortBy();
        }

        public function getSortByDirection()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->getSortByDirection();
        }

        /**
        * Sets up a multiple columns to search by. Each argument is taken "as-is" (including asc or desc) and concatenated with commas
        * Note that this is overrides any previous sortByMultiple() call, and all sortBy() calls. Alternatively, you can pass a single
        * array with multiple columns to sort by as its values.
        * e.g. $list->sortByMultiple('columna desc', 'columnb asc');
        * or $list->sortByMultiple(array('columna desc', 'columnb asc'));
        */
        public function sortByMultiple()
        {
            /** @var Concrete\Core\Legacy\ItemList $instance */
            return $instance->sortByMultiple();
        }

    }

    class StartingPointPackage extends \Concrete\Core\Package\StartingPointPackage
    {

        /** @var \Concrete\Core\Package\StartingPointPackage */
        protected static $instance;

        public function getInstallRoutines()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->getInstallRoutines();
        }

        public function add_home_page()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->add_home_page();
        }

        public function precache()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->precache();
        }

        public function install_attributes()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_attributes();
        }

        public function install_dashboard()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_dashboard();
        }

        public function install_gathering()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_gathering();
        }

        public function install_page_types()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_page_types();
        }

        public function install_page_templates()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_page_templates();
        }

        public function install_required_single_pages()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_required_single_pages();
        }

        public function install_image_editor()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_image_editor();
        }

        public function install_blocktypes()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_blocktypes();
        }

        public function install_themes()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_themes();
        }

        public function install_jobs()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_jobs();
        }

        public function install_config()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_config();
        }

        public function import_files()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->import_files();
        }

        public function install_content()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_content();
        }

        public function install_database()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_database();
        }

        protected function indexAdditionalDatabaseFields()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->indexAdditionalDatabaseFields();
        }

        public function add_users()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->add_users();
        }

        public function make_directories()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->make_directories();
        }

        public function finish()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->finish();
        }

        public function install_permissions()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->install_permissions();
        }

        public function set_site_permissions()
        {
            /** @var Concrete\Core\Package\StartingPointPackage $instance */
            return $instance->set_site_permissions();
        }

        public static function hasCustomList()
        {
            return Concrete\Core\Package\StartingPointPackage::hasCustomList();
        }

        public static function getClass($pkgHandle)
        {
            return Concrete\Core\Package\StartingPointPackage::getClass($pkgHandle);
        }

        public static function getAvailableList()
        {
            return Concrete\Core\Package\StartingPointPackage::getAvailableList();
        }

        public function getRelativePath()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getRelativePath();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageID();
        }

        public function getPackageName()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageName();
        }

        public function getPackageDescription()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageDescription();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageHandle();
        }

        /**
        * Gets the date the package was added to the system,
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getPackageDateInstalled()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageDateInstalled();
        }

        public function getPackageVersion()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageVersion();
        }

        public function getPackageVersionUpdateAvailable()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageVersionUpdateAvailable();
        }

        public function isPackageInstalled()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->isPackageInstalled();
        }

        public function getChangelogContents()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getChangelogContents();
        }

        /**
        * Returns the currently installed package version.
        * NOTE: This function only returns a value if getLocalUpgradeablePackages() has been called first!
        */
        public function getPackageCurrentlyInstalledVersion()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageCurrentlyInstalledVersion();
        }

        public function getApplicationVersionRequired()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getApplicationVersionRequired();
        }

        public function hasInstallNotes()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->hasInstallNotes();
        }

        public function hasInstallPostScreen()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->hasInstallPostScreen();
        }

        public function allowsFullContentSwap()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->allowsFullContentSwap();
        }

        public function showInstallOptionsScreen()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->showInstallOptionsScreen();
        }

        public static function installDB($xmlFile)
        {
            return Concrete\Core\Package\Package::installDB($xmlFile);
        }

        /**
        * Loads package translation files into zend translate
        * @param string $locale = null The identifier of the locale to activate (used to build the language file path). If empty we'll use currently active locale.
        * @param \Zend\I18n\Translator\Translator|string $translate = 'current' The Zend Translator instance that holds the translations (set to 'current' to use the current one)
        */
        public function setupPackageLocalization($locale = null, $translate = "current")
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->setupPackageLocalization($locale, $translate);
        }

        /**
        * Returns an array of package items (e.g. blocks, themes)
        */
        public function getPackageItems()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackageItems();
        }

        /** Returns the display name of a category of package items (localized and escaped accordingly to $format)
        * @param string $categoryHandle The category handle
        * @param string $format = 'html' Escape the result in html format (if $format is 'html'). If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public static function getPackageItemsCategoryDisplayName($categoryHandle, $format = "html")
        {
            return Concrete\Core\Package\Package::getPackageItemsCategoryDisplayName($categoryHandle, $format);
        }

        public static function getItemName($item)
        {
            return Concrete\Core\Package\Package::getItemName($item);
        }

        /**
        * Uninstalls the package. Removes any blocks, themes, or pages associated with the package.
        */
        public function uninstall()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->uninstall();
        }

        protected function validateClearSiteContents($options)
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->validateClearSiteContents($options);
        }

        public function swapContent($options)
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->swapContent($options);
        }

        public static function testForInstall($package, $testForAlreadyInstalled = true)
        {
            return Concrete\Core\Package\Package::testForInstall($package, $testForAlreadyInstalled);
        }

        public function mapError($testResults)
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->mapError($testResults);
        }

        public function getPackagePath()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getPackagePath();
        }

        /**
        * returns a Package object for the given package id, null if not found
        * @param int $pkgID
        * @return Package
        */
        public static function getByID($pkgID)
        {
            return Concrete\Core\Package\Package::getByID($pkgID);
        }

        /**
        * returns a Package object for the given package handle, null if not found
        * @param string $pkgHandle
        * @return Package
        */
        public static function getByHandle($pkgHandle)
        {
            return Concrete\Core\Package\Package::getByHandle($pkgHandle);
        }

        /**
        * Called to enable package specific configuration
        */
        public function registerConfigNamespace()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->registerConfigNamespace();
        }

        /**
        * Get the standard database config liaison
        * @return \Concrete\Core\Config\Repository\Liaison
        */
        public function getConfig()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getConfig();
        }

        /**
        * Get the standard database config liaison
        * @return \Concrete\Core\Config\Repository\Liaison
        */
        public function getDatabaseConfig()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getDatabaseConfig();
        }

        /**
        * Get the standard filesystem config liaison
        * @return \Concrete\Core\Config\Repository\Liaison
        */
        public function getFileConfig()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->getFileConfig();
        }

        /**
        * @return Package
        */
        public function install()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->install();
        }

        public function updateAvailableVersionNumber($vNum)
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->updateAvailableVersionNumber($vNum);
        }

        public function upgradeCoreData()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->upgradeCoreData();
        }

        public function upgrade()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->upgrade();
        }

        public static function getInstalledHandles()
        {
            return Concrete\Core\Package\Package::getInstalledHandles();
        }

        public static function getInstalledList()
        {
            return Concrete\Core\Package\Package::getInstalledList();
        }

        /**
        * Returns an array of packages that have newer versions in the local packages directory
        * than those which are in the Packages table. This means they're ready to be upgraded
        */
        public static function getLocalUpgradeablePackages()
        {
            return Concrete\Core\Package\Package::getLocalUpgradeablePackages();
        }

        public static function getRemotelyUpgradeablePackages()
        {
            return Concrete\Core\Package\Package::getRemotelyUpgradeablePackages();
        }

        /**
        * moves the current package's directory to the trash directory renamed with the package handle and a date code.
        */
        public function backup()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->backup();
        }

        /**
        * if a packate was just backed up by this instance of the package object and the packages/package handle directory doesn't exist, this will restore the
        * package from the trash
        */
        public function restore()
        {
            /** @var Concrete\Core\Package\Package $instance */
            return $instance->restore();
        }

        public static function getAvailablePackages($filterInstalled = true)
        {
            return Concrete\Core\Package\Package::getAvailablePackages($filterInstalled);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    /**
    * @deprecated
    */
    class TaskPermission extends \Concrete\Core\Legacy\TaskPermission
    {

        /** @var \Concrete\Core\Legacy\TaskPermission */
        protected static $instance;

        public function getByHandle($handle)
        {
            /** @var Concrete\Core\Legacy\TaskPermission $instance */
            return $instance->getByHandle($handle);
        }

        /**
        * Checks to see if there is a fatal error with this particular permission call.
        */
        public function isError()
        {
            /** @var Concrete\Core\Permission\Checker $instance */
            return $instance->isError();
        }

        /**
        * Returns the error code if there is one
        */
        public function getError()
        {
            /** @var Concrete\Core\Permission\Checker $instance */
            return $instance->getError();
        }

        /**
        * Legacy
        * @private
        */
        public function getOriginalObject()
        {
            /** @var Concrete\Core\Permission\Checker $instance */
            return $instance->getOriginalObject();
        }

        public function getResponseObject()
        {
            /** @var Concrete\Core\Permission\Checker $instance */
            return $instance->getResponseObject();
        }

    }

    class URL extends \Concrete\Core\Routing\URL
    {

        /** @var \Concrete\Core\Routing\URL */
        protected static $instance;

        public static function isValidURL($path)
        {
            return Concrete\Core\Routing\URL::isValidURL($path);
        }

        public static function page(Concrete\Core\Page\Page $c, $action = false)
        {
            return Concrete\Core\Routing\URL::page($c, $action);
        }

        public static function to($path, $action = false)
        {
            return Concrete\Core\Routing\URL::to($path, $action);
        }

        /**
        * Returns a path to a route
        */
        public static function route($data)
        {
            return Concrete\Core\Routing\URL::route($data);
        }

    }

    class User extends \Concrete\Core\User\User
    {

        /** @var \Concrete\Core\User\User */
        protected static $instance;

        /** Return an User instance given its id (or null if it's not found)
        * @param int $uID The id of the user
        * @param boolean $login = false Set to true to make the user the current one
        * @param boolean $cacheItemsOnLogin = false Set to true to cache some items when $login is true
        * @return User|null
        */
        public static function getByUserID($uID, $login = false, $cacheItemsOnLogin = true)
        {
            return Concrete\Core\User\User::getByUserID($uID, $login, $cacheItemsOnLogin);
        }

        /**
        * @param int $uID
        * @return User
        */
        public function loginByUserID($uID)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->loginByUserID($uID);
        }

        public static function isLoggedIn()
        {
            return Concrete\Core\User\User::isLoggedIn();
        }

        public function checkLogin()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->checkLogin();
        }

        public function recordLogin()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->recordLogin();
        }

        public function recordView($c)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->recordView($c);
        }

        public function encryptPassword($uPassword, $salt = null)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->encryptPassword($uPassword, $salt);
        }

        public function legacyEncryptPassword($uPassword)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->legacyEncryptPassword($uPassword);
        }

        public function isActive()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->isActive();
        }

        public function isSuperUser()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->isSuperUser();
        }

        public function getLastOnline()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getLastOnline();
        }

        public function getUserName()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getUserName();
        }

        public function isRegistered()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->isRegistered();
        }

        public function getUserID()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getUserID();
        }

        public function getUserTimezone()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getUserTimezone();
        }

        public function getUserSessionValidSince()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getUserSessionValidSince();
        }

        public function setAuthTypeCookie($authType)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->setAuthTypeCookie($authType);
        }

        public function setLastAuthType(Concrete\Core\Authentication\AuthenticationType $at)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->setLastAuthType($at);
        }

        public function getLastAuthType()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getLastAuthType();
        }

        public function unloadAuthenticationTypes()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->unloadAuthenticationTypes();
        }

        public function logout($hard = true)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->logout($hard);
        }

        public function invalidateSession($hard = true)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->invalidateSession($hard);
        }

        public function verifyAuthTypeCookie()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->verifyAuthTypeCookie();
        }

        public function getUserGroupObjects()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getUserGroupObjects();
        }

        public function getUserGroups()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getUserGroups();
        }

        /**
        * Sets a default language for a user record
        */
        public function setUserDefaultLanguage($lang)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->setUserDefaultLanguage($lang);
        }

        /**
        * Gets the default language for the logged-in user
        */
        public function getUserDefaultLanguage()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getUserDefaultLanguage();
        }

        /**
        * Gets the default language for the logged-in user
        */
        public function getLastPasswordChange()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getLastPasswordChange();
        }

        /**
        * Checks to see if the current user object is registered. If so, it queries that records
        * default language. Otherwise, it falls back to sitewide settings.
        */
        public function getUserLanguageToDisplay()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getUserLanguageToDisplay();
        }

        public function refreshUserGroups()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->refreshUserGroups();
        }

        public function getUserAccessEntityObjects()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getUserAccessEntityObjects();
        }

        public function _getUserGroups($disableLogin = false)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->_getUserGroups($disableLogin);
        }

        public function enterGroup($g)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->enterGroup($g);
        }

        public function exitGroup($g)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->exitGroup($g);
        }

        public function inGroup($g)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->inGroup($g);
        }

        public function loadMasterCollectionEdit($mcID, $ocID)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->loadMasterCollectionEdit($mcID, $ocID);
        }

        public function loadCollectionEdit(&$c)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->loadCollectionEdit($c);
        }

        public function unloadCollectionEdit($removeCache = true)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->unloadCollectionEdit($removeCache);
        }

        public function config($cfKey)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->config($cfKey);
        }

        public function markPreviousFrontendPage(Concrete\Core\Page\Page $c)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->markPreviousFrontendPage($c);
        }

        public function getPreviousFrontendPageID()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getPreviousFrontendPageID();
        }

        public function saveConfig($cfKey, $cfValue)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->saveConfig($cfKey, $cfValue);
        }

        public function refreshCollectionEdit(&$c)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->refreshCollectionEdit($c);
        }

        public function forceCollectionCheckInAll()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->forceCollectionCheckInAll();
        }

        /**
        * @see PasswordHash
        *
        * @return PasswordHash
        */
        public function getUserPasswordHasher()
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->getUserPasswordHasher();
        }

        /**
        * Manage user session writing
        * @param bool $cache_interface
        */
        public function persist($cache_interface = true)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->persist($cache_interface);
        }

        public function logIn($cache_interface = true)
        {
            /** @var Concrete\Core\User\User $instance */
            return $instance->logIn($cache_interface);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class UserAttributeKey extends \Concrete\Core\Attribute\Key\UserKey
    {

        /** @var \Concrete\Core\Attribute\Key\UserKey */
        protected static $instance;

        public function getIndexedSearchTable()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->getIndexedSearchTable();
        }

        public static function getAttributes($uID, $method = "getValue")
        {
            return Concrete\Core\Attribute\Key\UserKey::getAttributes($uID, $method);
        }

        public function getAttributeKeyDisplayOrder()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->getAttributeKeyDisplayOrder();
        }

        public function load($akID)
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->load($akID);
        }

        public function getAttributeValue($avID, $method = "getValue")
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->getAttributeValue($avID, $method);
        }

        public static function getByID($akID)
        {
            return Concrete\Core\Attribute\Key\UserKey::getByID($akID);
        }

        public static function getByHandle($akHandle)
        {
            return Concrete\Core\Attribute\Key\UserKey::getByHandle($akHandle);
        }

        public function export($axml)
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->export($axml);
        }

        public static function import(SimpleXMLElement $ak)
        {
            return Concrete\Core\Attribute\Key\UserKey::import($ak);
        }

        public function isAttributeKeyDisplayedOnProfile()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->isAttributeKeyDisplayedOnProfile();
        }

        public function isAttributeKeyEditableOnProfile()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->isAttributeKeyEditableOnProfile();
        }

        public function isAttributeKeyRequiredOnProfile()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->isAttributeKeyRequiredOnProfile();
        }

        public function isAttributeKeyEditableOnRegister()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->isAttributeKeyEditableOnRegister();
        }

        public function isAttributeKeyRequiredOnRegister()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->isAttributeKeyRequiredOnRegister();
        }

        public function isAttributeKeyDisplayedOnMemberList()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->isAttributeKeyDisplayedOnMemberList();
        }

        public function isAttributeKeyActive()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->isAttributeKeyActive();
        }

        public function activate()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->activate();
        }

        public function deactivate()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->deactivate();
        }

        public static function getList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getList();
        }

        protected function saveAttribute($uo, $value = false)
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->saveAttribute($uo, $value);
        }

        public static function add($type, $args, $pkg = false)
        {
            return Concrete\Core\Attribute\Key\UserKey::add($type, $args, $pkg);
        }

        public function update($args)
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->update($args);
        }

        public function delete()
        {
            /** @var Concrete\Core\Attribute\Key\UserKey $instance */
            return $instance->delete();
        }

        public static function getColumnHeaderList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getColumnHeaderList();
        }

        public static function getEditableList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getEditableList();
        }

        public static function getSearchableList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getSearchableList();
        }

        public static function getSearchableIndexedList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getSearchableIndexedList();
        }

        public static function getImporterList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getImporterList();
        }

        public static function getPublicProfileList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getPublicProfileList();
        }

        public static function getRegistrationList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getRegistrationList();
        }

        public static function getMemberListList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getMemberListList();
        }

        public static function getEditableInProfileList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getEditableInProfileList();
        }

        public static function getUserAddedList()
        {
            return Concrete\Core\Attribute\Key\UserKey::getUserAddedList();
        }

        public static function updateAttributesDisplayOrder($uats)
        {
            return Concrete\Core\Attribute\Key\UserKey::updateAttributesDisplayOrder($uats);
        }

        public function getSearchIndexFieldDefinition()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getSearchIndexFieldDefinition();
        }

        /**
        * Returns the name for this attribute key
        */
        public function getAttributeKeyName()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyName();
        }

        /** Returns the display name for this attribute (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *    Escape the result in html format (if $format is 'html').
        *    If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getAttributeKeyDisplayName($format = "html")
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyDisplayName($format);
        }

        /**
        * Returns the handle for this attribute key
        */
        public function getAttributeKeyHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyHandle();
        }

        /**
        * Deprecated. Going to be replaced by front end display name
        */
        public function getAttributeKeyDisplayHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyDisplayHandle();
        }

        /**
        * Returns the ID for this attribute key
        */
        public function getAttributeKeyID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyID();
        }

        public function getAttributeKeyCategoryID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyCategoryID();
        }

        /**
        * Returns whether the attribute key is searchable
        */
        public function isAttributeKeySearchable()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeySearchable();
        }

        /**
        * Returns whether the attribute key is internal
        */
        public function isAttributeKeyInternal()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyInternal();
        }

        /**
        * Returns whether the attribute key is indexed as a "keyword search" field.
        */
        public function isAttributeKeyContentIndexed()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyContentIndexed();
        }

        /**
        * Returns whether the attribute key is one that was automatically created by a process.
        */
        public function isAttributeKeyAutoCreated()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyAutoCreated();
        }

        /**
        * Returns whether the attribute key is included in the standard search for this category.
        */
        public function isAttributeKeyColumnHeader()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyColumnHeader();
        }

        /**
        * Returns whether the attribute key is one that can be edited through the frontend.
        */
        public function isAttributeKeyEditable()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->isAttributeKeyEditable();
        }

        public function getPackageID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getPackageID();
        }

        public function getPackageHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getPackageHandle();
        }

        public static function getInstanceByID($akID)
        {
            return Concrete\Core\Attribute\Key\Key::getInstanceByID($akID);
        }

        /**
        * Returns an attribute type object
        */
        public function getAttributeType()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeType();
        }

        /**
        * Returns the attribute type handle
        */
        public function getAttributeTypeHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeTypeHandle();
        }

        public function getAttributeKeyType()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyType();
        }

        public static function exportList($xml)
        {
            return Concrete\Core\Attribute\Key\Key::exportList($xml);
        }

        /**
        * Note, this queries both the pkgID found on the AttributeKeys table AND any attribute keys of a special type
        * installed by that package, and any in categories by that package.
        * That's because a special type, if the package is uninstalled, is going to be unusable
        * by attribute keys that still remain.
        */
        public static function getListByPackage($pkg)
        {
            return Concrete\Core\Attribute\Key\Key::getListByPackage($pkg);
        }

        public function refreshCache()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->refreshCache();
        }

        /**
        * Duplicates an attribute key
        */
        public function duplicate($args = array())
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->duplicate($args);
        }

        public function inAttributeSet($as)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->inAttributeSet($as);
        }

        public function setAttributeKeyColumnHeader($r)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->setAttributeKeyColumnHeader($r);
        }

        /**
        * @param string $table
        * @param array $columnHeaders
        * @param \Concrete\Core\Attribute\Value\ValueList $attribs
        * @param mixed $rs this is a legacy parameter, not actually used anymore
        */
        public function reindex($table, $columnHeaders, $attribs, $rs = null)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->reindex($table, $columnHeaders, $attribs, $rs);
        }

        public function updateSearchIndex($prevHandle = false)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->updateSearchIndex($prevHandle);
        }

        public function getAttributeValueIDList()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeValueIDList();
        }

        /**
        * Adds a generic attribute record (with this type) to the AttributeValues table
        */
        public function addAttributeValue()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->addAttributeValue();
        }

        public function getAttributeKeyIconSRC()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeKeyIconSRC();
        }

        public function getController()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getController();
        }

        /**
        * Renders a view for this attribute key. If no view is default we display it's "view"
        * Valid views are "view", "form" or a custom view (if the attribute has one in its directory)
        * Additionally, an attribute does not have to have its own interface. If it doesn't, then whatever
        * is printed in the corresponding $view function in the attribute's controller is printed out.
        */
        public function render($view = "view", $value = false, $return = false)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->render($view, $value, $return);
        }

        public function validateAttributeForm($h = false)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->validateAttributeForm($h);
        }

        public function createIndexedSearchTable()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->createIndexedSearchTable();
        }

        public function setAttributeSet($as)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->setAttributeSet($as);
        }

        public function clearAttributeSets()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->clearAttributeSets();
        }

        public function getAttributeSets()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getAttributeSets();
        }

        /**
        * Saves an attribute using its stock form.
        */
        public function saveAttributeForm($obj)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->saveAttributeForm($obj);
        }

        /**
        * Sets an attribute directly with a passed value.
        */
        public function setAttribute($obj, $value)
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->setAttribute($obj, $value);
        }

        /**
        * @deprecated
        */
        public function outputSearchHTML()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->outputSearchHTML();
        }

        /**
        * @deprecated
        */
        public function getKeyName()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getKeyName();
        }

        /**
        * Returns the handle for this attribute key
        */
        public function getKeyHandle()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getKeyHandle();
        }

        /**
        * Returns the ID for this attribute key
        */
        public function getKeyID()
        {
            /** @var Concrete\Core\Attribute\Key\Key $instance */
            return $instance->getKeyID();
        }

        public static function exportTranslations()
        {
            return Concrete\Core\Attribute\Key\Key::exportTranslations();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class UserInfo extends \Concrete\Core\User\UserInfo
    {

        /** @var \Concrete\Core\User\UserInfo */
        protected static $instance;

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        /**
        * returns the UserInfo object for a give user's uID
        * @param int $uID
        * @return UserInfo
        */
        public static function getByID($uID)
        {
            return Concrete\Core\User\UserInfo::getByID($uID);
        }

        /**
        * returns the UserInfo object for a give user's username
        * @param string $uName
        * @return UserInfo
        */
        public static function getByUserName($uName)
        {
            return Concrete\Core\User\UserInfo::getByUserName($uName);
        }

        /**
        * returns the UserInfo object for a give user's email address
        * @param string $uEmail
        * @return UserInfo
        */
        public static function getByEmail($uEmail)
        {
            return Concrete\Core\User\UserInfo::getByEmail($uEmail);
        }

        /**
        * @param string $uHash
        * @param boolean $unredeemedHashesOnly
        * @return UserInfo
        */
        public static function getByValidationHash($uHash, $unredeemedHashesOnly = true)
        {
            return Concrete\Core\User\UserInfo::getByValidationHash($uHash, $unredeemedHashesOnly);
        }

        public function getUserBadges()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserBadges();
        }

        /**
        * @param array $data
        * @return UserInfo
        */
        public static function add($data)
        {
            return Concrete\Core\User\UserInfo::add($data);
        }

        public function addSuperUser($uPasswordEncrypted, $uEmail)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->addSuperUser($uPasswordEncrypted, $uEmail);
        }

        /**
        * Deletes a user
        * @return void
        */
        public function delete()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->delete();
        }

        /**
        * Called only by the getGroupMembers function it sets the "type" of member for this group. Typically only used programmatically
        * @param string $type
        * @return void
        */
        public function setGroupMemberType($type)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->setGroupMemberType($type);
        }

        public function getGroupMemberType()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getGroupMemberType();
        }

        public function canReadPrivateMessage($msg)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->canReadPrivateMessage($msg);
        }

        public function updateUserAvatar(Imagine\Image\ImageInterface $image)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->updateUserAvatar($image);
        }

        public function sendPrivateMessage($recipient, $subject, $text, $inReplyTo = false)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->sendPrivateMessage($recipient, $subject, $text, $inReplyTo);
        }

        /**
        * gets the user object of the current UserInfo object ($this)
        * @return User
        */
        public function getUserObject()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserObject();
        }

        /**
        * Sets the attribute of a user info object to the specified value, and saves it in the database
        */
        public function setAttribute($ak, $value)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->setAttribute($ak, $value);
        }

        public function clearAttribute($ak)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->clearAttribute($ak);
        }

        /**
        * Reindex the attributes on this file.
        * @return void
        */
        public function reindex()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->reindex();
        }

        /**
        * Gets the value of the attribute for the user
        */
        public function getAttribute($ak, $displayMode = false)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getAttribute($ak, $displayMode);
        }

        public function getAttributeField($ak)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getAttributeField($ak);
        }

        public function getAttributeValueObject($ak, $createIfNotFound = false)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getAttributeValueObject($ak, $createIfNotFound);
        }

        public function update($data)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->update($data);
        }

        public function updateGroups($groupArray)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->updateGroups($groupArray);
        }

        public function saveUserAttributesForm($attributes)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->saveUserAttributesForm($attributes);
        }

        /**
        * @param array $data
        * @return UserInfo
        */
        public function register($data)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->register($data);
        }

        public function setupValidation()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->setupValidation();
        }

        public function markValidated()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->markValidated();
        }

        public function changePassword($newPassword)
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->changePassword($newPassword);
        }

        public function activate()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->activate();
        }

        public function deactivate()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->deactivate();
        }

        public function resetUserPassword()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->resetUserPassword();
        }

        public function hasAvatar()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->hasAvatar();
        }

        public function getLastLogin()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getLastLogin();
        }

        public function getLastIPAddress()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getLastIPAddress();
        }

        public function getPreviousLogin()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getPreviousLogin();
        }

        public function isActive()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->isActive();
        }

        public function isValidated()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->isValidated();
        }

        public function isFullRecord()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->isFullRecord();
        }

        public function getNumLogins()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getNumLogins();
        }

        public function getUserID()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserID();
        }

        public function getUserName()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserName();
        }

        public function getUserDisplayName()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserDisplayName();
        }

        public function getUserPassword()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserPassword();
        }

        public function getUserEmail()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserEmail();
        }

        /**
        * returns the user's timezone
        * @return string timezone
        */
        public function getUserTimezone()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserTimezone();
        }

        public function getUserDefaultLanguage()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserDefaultLanguage();
        }

        /**
        * Gets the date a user was added to the system,
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getUserDateAdded()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserDateAdded();
        }

        public function getUserStartDate()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserStartDate();
        }

        /**
        * Gets the date a user was last active on the site
        * @return string date formated like: 2009-01-01 00:00:00
        */
        public function getLastOnline()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getLastOnline();
        }

        public function getUserEndDate()
        {
            /** @var Concrete\Core\User\UserInfo $instance */
            return $instance->getUserEndDate();
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class UserList extends \Concrete\Core\User\UserList
    {

        /** @var \Concrete\Core\User\UserList */
        protected static $instance;

        protected function getAttributeKeyClassName()
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->getAttributeKeyClassName();
        }

        /**
        * The total results of the query
        * @return int
        */
        public function getTotalResults()
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->getTotalResults();
        }

        /**
        * Gets the pagination object for the query.
        * @return Pagination
        */
        protected function createPaginationObject()
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->createPaginationObject();
        }

        /**
        * @param $queryRow
        * @return \Concrete\Core\User\UserInfo
        */
        public function getResult($queryRow)
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->getResult($queryRow);
        }

        /**
        * similar to get except it returns an array of userIDs
        * much faster than getting a UserInfo object for each result if all you need is the user's id
        * @return array $userIDs
        */
        public function getResultIDs()
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->getResultIDs();
        }

        public function createQuery()
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->createQuery();
        }

        public function finalizeQuery(Doctrine\DBAL\Query\QueryBuilder $query)
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->finalizeQuery($query);
        }

        public function includeInactiveUsers()
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->includeInactiveUsers();
        }

        public function includeUnvalidatedUsers()
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->includeUnvalidatedUsers();
        }

        /**
        * Explicitly filters by whether a user is active or not. Does this by setting "include inactive users"
        * to true, THEN filtering them in our out. Some settings here are redundant given the default settings
        * but a little duplication is ok sometimes.
        * @param $val
        */
        public function filterByIsActive($isActive)
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->filterByIsActive($isActive);
        }

        /**
        * Filter list by user name
        * @param $username
        */
        public function filterByUserName($username)
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->filterByUserName($username);
        }

        /**
        * Filter list by user name but as a like parameter
        * @param $username
        */
        public function filterByFuzzyUserName($username)
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->filterByFuzzyUserName($username);
        }

        /**
        * Filters keyword fields by keywords (including username, email and attributes).
        * @param $keywords
        */
        public function filterByKeywords($keywords)
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->filterByKeywords($keywords);
        }

        /**
        * Filters the user list for only users within the provided group.  Accepts an instance of a group object or a string group name
        * @param \Concrete\Core\User\Group | string $group
        * @param boolean $inGroup
        * @return void
        */
        public function filterByGroup($group = "", $inGroup = true)
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->filterByGroup($group, $inGroup);
        }

        /**
        * Filters by date added
        * @param string $date
        */
        public function filterByDateAdded($date, $comparison = "=")
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->filterByDateAdded($date, $comparison);
        }

        /**
        * Filters by Group ID
        */
        public function filterByGroupID($gID)
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->filterByGroupID($gID);
        }

        public function filterByNoGroup()
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->filterByNoGroup();
        }

        public function sortByUserID()
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->sortByUserID();
        }

        public function sortByUserName()
        {
            /** @var Concrete\Core\User\UserList $instance */
            return $instance->sortByUserName();
        }

        /**
        * Filters by a attribute.
        */
        public function filterByAttribute($handle, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Search\ItemList\Database\AttributedItemList $instance */
            return $instance->filterByAttribute($handle, $value, $comparison);
        }

        /**
        * @param StickyRequest $request
        */
        public function setupAutomaticSorting(Concrete\Core\Search\StickyRequest $request = null)
        {
            /** @var Concrete\Core\Search\ItemList\Database\AttributedItemList $instance */
            return $instance->setupAutomaticSorting($request);
        }

        public function getQueryObject()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->getQueryObject();
        }

        public function deliverQueryObject()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->deliverQueryObject();
        }

        public function executeGetResults()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->executeGetResults();
        }

        public function debugStart()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->debugStart();
        }

        public function debugStop()
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->debugStop();
        }

        protected function executeSortBy($column, $direction = "asc")
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->executeSortBy($column, $direction);
        }

        /**
        * @deprecated
        */
        public function filter($field, $value, $comparison = "=")
        {
            /** @var Concrete\Core\Search\ItemList\Database\ItemList $instance */
            return $instance->filter($field, $value, $comparison);
        }

        public function debug()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->debug();
        }

        public function isDebugged()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->isDebugged();
        }

        public function sortBy($field, $direction = "asc")
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->sortBy($field, $direction);
        }

        /** Returns a full array of results. */
        public function getResults()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getResults();
        }

        public function getActiveSortColumn()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getActiveSortColumn();
        }

        public function isActiveSortColumn($field)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->isActiveSortColumn($field);
        }

        public function disableAutomaticSorting()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->disableAutomaticSorting();
        }

        public function getSortClassName($column)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getSortClassName($column);
        }

        public function getSortURL($column, $dir = "asc", $url = false)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getSortURL($column, $dir, $url);
        }

        public function getActiveSortDirection()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getActiveSortDirection();
        }

        public function getQuerySortColumnParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQuerySortColumnParameter();
        }

        public function getQueryPaginationPageParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQueryPaginationPageParameter();
        }

        public function getQuerySortDirectionParameter()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getQuerySortDirectionParameter();
        }

        public function setItemsPerPage($itemsPerPage)
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->setItemsPerPage($itemsPerPage);
        }

        /**
        * @return \Concrete\Core\Search\Pagination\Pagination|\Concrete\Core\Search\Pagination\PermissionablePagination
        */
        public function getPagination()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->getPagination();
        }

        /**
        * @deprecated
        */
        public function get()
        {
            /** @var Concrete\Core\Search\ItemList\ItemList $instance */
            return $instance->get();
        }

    }

    /**
    * Class View
    *
    * Override of the default view in order to be able to inject JS vars
    *
    * @package   Application\Src\Concrete\View
    * @author    Stefan Fodor
    * @copyright Copyright (c) 2014
    * @version   1.0
    */
    class View extends Application\Src\Concrete\View\View
    {

        /** @var Application\Src\Concrete\View\View */
        protected static $instance;

        /**
        * Queues up a list of JS vars
        * @param      $name
        * @param      $value
        */
        public function addJSVariable($name, $value)
        {
            /** @var Application\Src\Concrete\View\View $instance */
            return $instance->addJSVariable($name, $value);
        }

        /**
        * Transform given js vars to JS code
        *
        * @return string
        */
        public function getJSVariablesOutput()
        {
            /** @var Application\Src\Concrete\View\View $instance */
            return $instance->getJSVariablesOutput();
        }

        /**
        * Checks if a given element exists
        * @param $_file
        * @param null $_pkgHandle
        * @return bool
        */
        public static function elementExists($_file, $_pkgHandle = null)
        {
            return Application\Src\Concrete\View\View::elementExists($_file, $_pkgHandle);
        }

        /**
        * same as ::element, but provides a fallback
        * @param $preferred_file
        * @param $fallback_file
        * @param $args
        */
        public static function elementWithFallback($preferred_file, $fallback_file, $args = null)
        {
            return Application\Src\Concrete\View\View::elementWithFallback($preferred_file, $fallback_file, $args);
        }

        protected function constructView($path = false)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->constructView($path);
        }

        public function setPackageHandle($pkgHandle)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->setPackageHandle($pkgHandle);
        }

        public function getThemeDirectory()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->getThemeDirectory();
        }

        public function getViewPath()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->getViewPath();
        }

        /**
        * gets the relative theme path for use in templates
        * @access public
        * @return string $themePath
        */
        public function getThemePath()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->getThemePath();
        }

        public function getThemeHandle()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->getThemeHandle();
        }

        public function setInnerContentFile($innerContentFile)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->setInnerContentFile($innerContentFile);
        }

        public function setViewRootDirectoryName($directory)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->setViewRootDirectoryName($directory);
        }

        public function inc($file, $args = array())
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->inc($file, $args);
        }

        /**
        * A shortcut to posting back to the current page with a task and optional parameters. Only works in the context of
        * @param string $action
        * @param string $task
        * @return string $url
        */
        public function action($action)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->action($action);
        }

        public function setViewTheme($theme)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->setViewTheme($theme);
        }

        /**
        * Load all the theme-related variables for which theme to use for this request.
        */
        protected function loadViewThemeObject()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->loadViewThemeObject();
        }

        /**
        * Begin the render
        */
        public function start($state)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->start($state);
        }

        public function setupRender()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->setupRender();
        }

        public function startRender()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->startRender();
        }

        protected function onBeforeGetContents()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->onBeforeGetContents();
        }

        public function renderViewContents($scopeItems)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->renderViewContents($scopeItems);
        }

        public function finishRender($contents)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->finishRender($contents);
        }

        /**
        * Function responsible for outputting header items
        * @access private
        */
        public function markHeaderAssetPosition()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->markHeaderAssetPosition();
        }

        /**
        * Function responsible for outputting footer items
        * @access private
        */
        public function markFooterAssetPosition()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->markFooterAssetPosition();
        }

        protected function getAssetsToOutput()
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->getAssetsToOutput();
        }

        public function postProcessViewContents($contents)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->postProcessViewContents($contents);
        }

        protected function postProcessAssets($assets)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->postProcessAssets($assets);
        }

        protected function replaceEmptyAssetPlaceholders($pageContent)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->replaceEmptyAssetPlaceholders($pageContent);
        }

        protected function replaceAssetPlaceholders($outputAssets, $pageContent)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->replaceAssetPlaceholders($outputAssets, $pageContent);
        }

        protected function outputAssetIntoView($item)
        {
            /** @var Concrete\Core\View\View $instance */
            return $instance->outputAssetIntoView($item);
        }

        public static function element($_file, $args = null, $_pkgHandle = null)
        {
            return Concrete\Core\View\View::element($_file, $args, $_pkgHandle);
        }

        public function addScopeItems($items)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->addScopeItems($items);
        }

        public static function getRequestInstance()
        {
            return Concrete\Core\View\AbstractView::getRequestInstance();
        }

        protected static function setRequestInstance(Concrete\Core\View\View $v)
        {
            return Concrete\Core\View\AbstractView::setRequestInstance($v);
        }

        protected static function revertRequestInstance()
        {
            return Concrete\Core\View\AbstractView::revertRequestInstance();
        }

        public function addHeaderAsset($asset)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->addHeaderAsset($asset);
        }

        public function addFooterAsset($asset)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->addFooterAsset($asset);
        }

        public function addOutputAsset($asset)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->addOutputAsset($asset);
        }

        public function requireAsset($assetType, $assetHandle = false)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->requireAsset($assetType, $assetHandle);
        }

        public function setController($controller)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->setController($controller);
        }

        public function setViewTemplate($template)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->setViewTemplate($template);
        }

        /**
        * Returns the value of the item in the POST array.
        * @access public
        * @param $key
        * @return void
        */
        public function post($key)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->post($key);
        }

        protected function onAfterGetContents()
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->onAfterGetContents();
        }

        public function getScopeItems()
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->getScopeItems();
        }

        public function render($state = false)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->render($state);
        }

        /**
        * url is a utility function that is used inside a view to setup urls w/tasks and parameters
        * @deprecated
        * @param string $action
        * @param string $task
        * @return string $url
        */
        public function url($action, $task = null)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->url($action, $task);
        }

        public function setThemeByPath($path, $theme = null, $wrapper = FILENAME_THEMES_VIEW)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->setThemeByPath($path, $theme, $wrapper);
        }

        public function renderError($title, $error, $errorObj = null)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->renderError($title, $error, $errorObj);
        }

        /**
        * @access private
        */
        public function addHeaderItem($item)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->addHeaderItem($item);
        }

        /**
        * @access private
        */
        public function addFooterItem($item)
        {
            /** @var Concrete\Core\View\AbstractView $instance */
            return $instance->addFooterItem($item);
        }

        /**
        * @return View
        */
        public static function getInstance()
        {
            return Concrete\Core\View\AbstractView::getInstance();
        }

    }

    /**
    * @package Workflow
    * @author Andrew Embler <andrew@concrete5.org>
    * @copyright  Copyright (c) 2003-2012 concrete5. (http://www.concrete5.org)
    * @license    http://www.concrete5.org/license/     MIT License
    *
    */
    class Workflow extends \Concrete\Core\Workflow\Workflow
    {

        /** @var \Concrete\Core\Workflow\Workflow */
        protected static $instance;

        public function getAllowedTasks()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getAllowedTasks();
        }

        public function getWorkflowID()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getWorkflowID();
        }

        public function getWorkflowName()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getWorkflowName();
        }

        /**
        * Returns the display name for this workflow (localized and escaped accordingly to $format)
        * @param string $format = 'html'
        *	Escape the result in html format (if $format is 'html').
        *	If $format is 'text' or any other value, the display name won't be escaped.
        * @return string
        */
        public function getWorkflowDisplayName($format = "html")
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getWorkflowDisplayName($format);
        }

        public function getWorkflowTypeObject()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getWorkflowTypeObject();
        }

        public function getRestrictedToPermissionKeyHandles()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getRestrictedToPermissionKeyHandles();
        }

        public function getPermissionResponseClassName()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getPermissionResponseClassName();
        }

        public function getPermissionAssignmentClassName()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getPermissionAssignmentClassName();
        }

        public function getPermissionObjectKeyCategoryHandle()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getPermissionObjectKeyCategoryHandle();
        }

        public function getPermissionObjectIdentifier()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getPermissionObjectIdentifier();
        }

        public function delete()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->delete();
        }

        public function getWorkflowProgressCurrentStatusNum(Concrete\Core\Workflow\Progress\Progress $wp)
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getWorkflowProgressCurrentStatusNum($wp);
        }

        public static function getList()
        {
            return Concrete\Core\Workflow\Workflow::getList();
        }

        public static function add(Concrete\Core\Workflow\Type $wt, $name)
        {
            return Concrete\Core\Workflow\Workflow::add($wt, $name);
        }

        protected function load($wfID)
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->load($wfID);
        }

        public static function getByID($wfID)
        {
            return Concrete\Core\Workflow\Workflow::getByID($wfID);
        }

        public function getWorkflowToolsURL($task)
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getWorkflowToolsURL($task);
        }

        public function updateName($wfName)
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->updateName($wfName);
        }

        public function getPermissionAccessObject()
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->getPermissionAccessObject();
        }

        public function validateTrigger(Concrete\Core\Workflow\Request\Request $req)
        {
            /** @var Concrete\Core\Workflow\Workflow $instance */
            return $instance->validateTrigger($req);
        }

        public function loadError($error)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->loadError($error);
        }

        public function isError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->isError();
        }

        public function getError()
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->getError();
        }

        public function setPropertiesFromArray($arr)
        {
            /** @var Concrete\Core\Foundation\Object $instance */
            return $instance->setPropertiesFromArray($arr);
        }

        public static function camelcase($file)
        {
            return Concrete\Core\Foundation\Object::camelcase($file);
        }

        public static function uncamelcase($string)
        {
            return Concrete\Core\Foundation\Object::uncamelcase($string);
        }

    }

    class Core extends Concrete\Core\Application\Application
    {

        /** @var Concrete\Core\Application\Application */
        protected static $instance;

        /**
        * Turns off the lights.
        */
        public static function shutdown()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->shutdown();
        }

        /**
        * Utility method for clearing all application caches.
        */
        public static function clearCaches()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->clearCaches();
        }

        /**
        * If we have job scheduling running through the site, we check to see if it's time to go for it.
        */
        protected static function handleScheduledJobs()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->handleScheduledJobs();
        }

        /**
        * Returns true if concrete5 is installed, false if it has not yet been
        */
        public static function isInstalled()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->isInstalled();
        }

        /**
        * Checks to see whether we should deliver a concrete5 response from the page cache
        */
        public static function checkPageCache(Concrete\Core\Http\Request $request)
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->checkPageCache($request);
        }

        public static function handleAutomaticUpdates()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->handleAutomaticUpdates();
        }

        /**
        * Run startup and localization events on any installed packages.
        */
        public static function setupPackages()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->setupPackages();
        }

        /**
        * Ensure we have a cache directory
        */
        public static function setupFilesystem()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->setupFilesystem();
        }

        /**
        * Returns true if the app is run through the command line
        */
        public static function isRunThroughCommandLineInterface()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->isRunThroughCommandLineInterface();
        }

        /**
        * Using the configuration value, determines whether we need to redirect to a URL with
        * a trailing slash or not.
        *
        * @return void
        */
        public static function handleURLSlashes()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->handleURLSlashes();
        }

        /**
        * If we have REDIRECT_TO_BASE_URL enabled, we need to honor it here.
        */
        public static function handleBaseURLRedirection()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->handleBaseURLRedirection();
        }

        /**
        * Inspects the request and determines what to serve.
        */
        public static function dispatch(Concrete\Core\Http\Request $request)
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->dispatch($request);
        }

        protected static function getEarlyDispatchResponse()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->getEarlyDispatchResponse();
        }

        /**
        * Get or check the current application environment.
        *
        * @param  mixed
        * @return string|bool
        */
        public static function environment()
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->environment();
        }

        /**
        * Detect the application's current environment.
        *
        * @param  array|string|Callable  $environments
        * @return string
        */
        public static function detectEnvironment($environments)
        {
            /** @var Concrete\Core\Application\Application $instance */
            return $instance->detectEnvironment($environments);
        }

        /**
        * Determine if a given string is resolvable.
        *
        * @param  string  $abstract
        * @return bool
        */
        protected static function resolvable($abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->resolvable($abstract);
        }

        /**
        * Determine if the given abstract type has been bound.
        *
        * @param  string  $abstract
        * @return bool
        */
        public static function bound($abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->bound($abstract);
        }

        /**
        * Determine if a given string is an alias.
        *
        * @param  string  $name
        * @return bool
        */
        public static function isAlias($name)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->isAlias($name);
        }

        /**
        * Register a binding with the container.
        *
        * @param  string               $abstract
        * @param  Closure|string|null  $concrete
        * @param  bool                 $shared
        * @return void
        */
        public static function bind($abstract, $concrete = null, $shared = false)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->bind($abstract, $concrete, $shared);
        }

        /**
        * Get the Closure to be used when building a type.
        *
        * @param  string  $abstract
        * @param  string  $concrete
        * @return \Closure
        */
        protected static function getClosure($abstract, $concrete)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->getClosure($abstract, $concrete);
        }

        /**
        * Register a binding if it hasn't already been registered.
        *
        * @param  string               $abstract
        * @param  Closure|string|null  $concrete
        * @param  bool                 $shared
        * @return void
        */
        public static function bindIf($abstract, $concrete = null, $shared = false)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->bindIf($abstract, $concrete, $shared);
        }

        /**
        * Register a shared binding in the container.
        *
        * @param  string               $abstract
        * @param  Closure|string|null  $concrete
        * @return void
        */
        public static function singleton($abstract, $concrete = null)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->singleton($abstract, $concrete);
        }

        /**
        * Wrap a Closure such that it is shared.
        *
        * @param  Closure  $closure
        * @return Closure
        */
        public static function share(Closure $closure)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->share($closure);
        }

        /**
        * Bind a shared Closure into the container.
        *
        * @param  string  $abstract
        * @param  \Closure  $closure
        * @return void
        */
        public static function bindShared($abstract, Closure $closure)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->bindShared($abstract, $closure);
        }

        /**
        * "Extend" an abstract type in the container.
        *
        * @param  string   $abstract
        * @param  Closure  $closure
        * @return void
        *
        * @throws \InvalidArgumentException
        */
        public static function extend($abstract, Closure $closure)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->extend($abstract, $closure);
        }

        /**
        * Get an extender Closure for resolving a type.
        *
        * @param  string  $abstract
        * @param  \Closure  $closure
        * @return \Closure
        */
        protected static function getExtender($abstract, Closure $closure)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->getExtender($abstract, $closure);
        }

        /**
        * Register an existing instance as shared in the container.
        *
        * @param  string  $abstract
        * @param  mixed   $instance
        * @return void
        */
        public static function instance($abstract, $instance)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->instance($abstract, $instance);
        }

        /**
        * Alias a type to a shorter name.
        *
        * @param  string  $abstract
        * @param  string  $alias
        * @return void
        */
        public static function alias($abstract, $alias)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->alias($abstract, $alias);
        }

        /**
        * Extract the type and alias from a given definition.
        *
        * @param  array  $definition
        * @return array
        */
        protected static function extractAlias(array $definition)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->extractAlias($definition);
        }

        /**
        * Bind a new callback to an abstract's rebind event.
        *
        * @param  string  $abstract
        * @param  \Closure  $callback
        * @return mixed
        */
        public static function rebinding($abstract, Closure $callback)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->rebinding($abstract, $callback);
        }

        /**
        * Refresh an instance on the given target and method.
        *
        * @param  string  $abstract
        * @param  mixed  $target
        * @param  string  $method
        * @return mixed
        */
        public static function refresh($abstract, $target, $method)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->refresh($abstract, $target, $method);
        }

        /**
        * Fire the "rebound" callbacks for the given abstract type.
        *
        * @param  string  $abstract
        * @return void
        */
        protected static function rebound($abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->rebound($abstract);
        }

        /**
        * Get the rebound callbacks for a given type.
        *
        * @param  string  $abstract
        * @return array
        */
        protected static function getReboundCallbacks($abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->getReboundCallbacks($abstract);
        }

        /**
        * Resolve the given type from the container.
        *
        * @param  string  $abstract
        * @param  array   $parameters
        * @return mixed
        */
        public static function make($abstract, $parameters = array())
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->make($abstract, $parameters);
        }

        /**
        * Get the concrete type for a given abstract.
        *
        * @param  string  $abstract
        * @return mixed   $concrete
        */
        protected static function getConcrete($abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->getConcrete($abstract);
        }

        /**
        * Determine if the given abstract has a leading slash.
        *
        * @param  string  $abstract
        * @return bool
        */
        protected static function missingLeadingSlash($abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->missingLeadingSlash($abstract);
        }

        /**
        * Instantiate a concrete instance of the given type.
        *
        * @param  string  $concrete
        * @param  array   $parameters
        * @return mixed
        *
        * @throws BindingResolutionException
        */
        public static function build($concrete, $parameters = array())
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->build($concrete, $parameters);
        }

        /**
        * Resolve all of the dependencies from the ReflectionParameters.
        *
        * @param  array  $parameters
        * @param  array  $primitives
        * @return array
        */
        protected static function getDependencies($parameters, array $primitives = array())
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->getDependencies($parameters, $primitives);
        }

        /**
        * Resolve a non-class hinted dependency.
        *
        * @param  ReflectionParameter  $parameter
        * @return mixed
        *
        * @throws BindingResolutionException
        */
        protected static function resolveNonClass(ReflectionParameter $parameter)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->resolveNonClass($parameter);
        }

        /**
        * Resolve a class based dependency from the container.
        *
        * @param  \ReflectionParameter  $parameter
        * @return mixed
        *
        * @throws BindingResolutionException
        */
        protected static function resolveClass(ReflectionParameter $parameter)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->resolveClass($parameter);
        }

        /**
        * If extra parameters are passed by numeric ID, rekey them by argument name.
        *
        * @param  array  $dependencies
        * @param  array  $parameters
        * @param  array
        * @return array
        */
        protected static function keyParametersByArgument(array $dependencies, array $parameters)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->keyParametersByArgument($dependencies, $parameters);
        }

        /**
        * Register a new resolving callback.
        *
        * @param  string  $abstract
        * @param  \Closure  $callback
        * @return void
        */
        public static function resolving($abstract, Closure $callback)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->resolving($abstract, $callback);
        }

        /**
        * Register a new resolving callback for all types.
        *
        * @param  \Closure  $callback
        * @return void
        */
        public static function resolvingAny(Closure $callback)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->resolvingAny($callback);
        }

        /**
        * Fire all of the resolving callbacks.
        *
        * @param  mixed  $object
        * @return void
        */
        protected static function fireResolvingCallbacks($abstract, $object)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->fireResolvingCallbacks($abstract, $object);
        }

        /**
        * Fire an array of callbacks with an object.
        *
        * @param  mixed  $object
        * @param  array  $callbacks
        */
        protected static function fireCallbackArray($object, array $callbacks)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->fireCallbackArray($object, $callbacks);
        }

        /**
        * Determine if a given type is shared.
        *
        * @param  string  $abstract
        * @return bool
        */
        public static function isShared($abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->isShared($abstract);
        }

        /**
        * Determine if the given concrete is buildable.
        *
        * @param  mixed   $concrete
        * @param  string  $abstract
        * @return bool
        */
        protected static function isBuildable($concrete, $abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->isBuildable($concrete, $abstract);
        }

        /**
        * Get the alias for an abstract if available.
        *
        * @param  string  $abstract
        * @return string
        */
        protected static function getAlias($abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->getAlias($abstract);
        }

        /**
        * Get the container's bindings.
        *
        * @return array
        */
        public static function getBindings()
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->getBindings();
        }

        /**
        * Drop all of the stale instances and aliases.
        *
        * @param  string  $abstract
        * @return void
        */
        protected static function dropStaleInstances($abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->dropStaleInstances($abstract);
        }

        /**
        * Remove a resolved instance from the instance cache.
        *
        * @param  string  $abstract
        * @return void
        */
        public static function forgetInstance($abstract)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->forgetInstance($abstract);
        }

        /**
        * Clear all of the instances from the container.
        *
        * @return void
        */
        public static function forgetInstances()
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->forgetInstances();
        }

        /**
        * Determine if a given offset exists.
        *
        * @param  string  $key
        * @return bool
        */
        public static function offsetExists($key)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->offsetExists($key);
        }

        /**
        * Get the value at a given offset.
        *
        * @param  string  $key
        * @return mixed
        */
        public static function offsetGet($key)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->offsetGet($key);
        }

        /**
        * Set the value at a given offset.
        *
        * @param  string  $key
        * @param  mixed   $value
        * @return void
        */
        public static function offsetSet($key, $value)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->offsetSet($key, $value);
        }

        /**
        * Unset the value at a given offset.
        *
        * @param  string  $key
        * @return void
        */
        public static function offsetUnset($key)
        {
            /** @var Illuminate\Container\Container $instance */
            return $instance->offsetUnset($key);
        }

    }

    class Session extends Symfony\Component\HttpFoundation\Session\Session
    {

        /** @var Symfony\Component\HttpFoundation\Session\Session */
        protected static $instance;

        /**
        * {@inheritdoc}
        */
        public static function start()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->start();
        }

        /**
        * {@inheritdoc}
        */
        public static function has($name)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->has($name);
        }

        /**
        * {@inheritdoc}
        */
        public static function get($name, $default = null)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->get($name, $default);
        }

        /**
        * {@inheritdoc}
        */
        public static function set($name, $value)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->set($name, $value);
        }

        /**
        * {@inheritdoc}
        */
        public static function all()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->all();
        }

        /**
        * {@inheritdoc}
        */
        public static function replace(array $attributes)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->replace($attributes);
        }

        /**
        * {@inheritdoc}
        */
        public static function remove($name)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->remove($name);
        }

        /**
        * {@inheritdoc}
        */
        public static function clear()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->clear();
        }

        /**
        * {@inheritdoc}
        */
        public static function isStarted()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->isStarted();
        }

        /**
        * Returns an iterator for attributes.
        *
        * @return \ArrayIterator An \ArrayIterator instance
        */
        public static function getIterator()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->getIterator();
        }

        /**
        * Returns the number of attributes.
        *
        * @return int The number of attributes
        */
        public static function count()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->count();
        }

        /**
        * {@inheritdoc}
        */
        public static function invalidate($lifetime = null)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->invalidate($lifetime);
        }

        /**
        * {@inheritdoc}
        */
        public static function migrate($destroy = false, $lifetime = null)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->migrate($destroy, $lifetime);
        }

        /**
        * {@inheritdoc}
        */
        public static function save()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->save();
        }

        /**
        * {@inheritdoc}
        */
        public static function getId()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->getId();
        }

        /**
        * {@inheritdoc}
        */
        public static function setId($id)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->setId($id);
        }

        /**
        * {@inheritdoc}
        */
        public static function getName()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->getName();
        }

        /**
        * {@inheritdoc}
        */
        public static function setName($name)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->setName($name);
        }

        /**
        * {@inheritdoc}
        */
        public static function getMetadataBag()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->getMetadataBag();
        }

        /**
        * {@inheritdoc}
        */
        public static function registerBag(Symfony\Component\HttpFoundation\Session\SessionBagInterface $bag)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->registerBag($bag);
        }

        /**
        * {@inheritdoc}
        */
        public static function getBag($name)
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->getBag($name);
        }

        /**
        * Gets the flashbag interface.
        *
        * @return FlashBagInterface
        */
        public static function getFlashBag()
        {
            /** @var Symfony\Component\HttpFoundation\Session\Session $instance */
            return $instance->getFlashBag();
        }

    }

    class Database extends Concrete\Core\Database\DatabaseManager
    {

        /** @var Concrete\Core\Database\DatabaseManager */
        protected static $instance;

        /**
        * Legacy entry point
        *
        * @deprecated
        * @return \Doctrine\DBAL\Connection
        */
        public static function getActiveConnection()
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->getActiveConnection();
        }

        /**
        * Legacy entry point
        *
        * @deprecated
        * @return \Doctrine\DBAL\Connection
        */
        public static function get()
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->get();
        }

        /**
        * Get a database connection instance.
        *
        * @param  string $name
        * @return \Doctrine\DBAL\Connection
        */
        public static function connection($name = null)
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->connection($name);
        }

        /**
        * Disconnect from the given database and remove from local cache.
        *
        * @param  string $name
        * @return void
        */
        public static function purge($name = null)
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->purge($name);
        }

        /**
        * Disconnect from the given database.
        *
        * @param  string $name
        * @return void
        */
        public static function disconnect($name = null)
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->disconnect($name);
        }

        /**
        * Reconnect to the given database.
        *
        * @param  string $name
        * @return \Doctrine\DBAL\Connection
        */
        public static function reconnect($name = null)
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->reconnect($name);
        }

        /**
        * Refresh the PDO connections on a given connection.
        *
        * @param  string $name
        * @return Connection
        */
        protected static function refreshPdoConnections($name)
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->refreshPdoConnections($name);
        }

        /**
        * Make the database connection instance.
        *
        * @param  string $name
        * @return Connection
        */
        protected static function makeConnection($name)
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->makeConnection($name);
        }

        /**
        * Prepare the database connection instance.
        *
        * @param Connection $connection
        * @return Connection
        */
        protected static function prepare($connection)
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->prepare($connection);
        }

        /**
        * Get the configuration for a connection.
        *
        * @param  string $name
        * @return array
        *
        * @throws \InvalidArgumentException
        */
        protected static function getConfig($name)
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->getConfig($name);
        }

        /**
        * Get the default connection name.
        *
        * @return string
        */
        public static function getDefaultConnection()
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->getDefaultConnection();
        }

        /**
        * Set the default connection name.
        *
        * @param  string $name
        * @return void
        */
        public static function setDefaultConnection($name)
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->setDefaultConnection($name);
        }

        /**
        * Register an extension connection resolver.
        *
        * @param  string   $name
        * @param  callable $resolver
        * @return void
        */
        public static function extend($name, $resolver)
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->extend($name, $resolver);
        }

        /**
        * Return all of the created connections.
        *
        * @return \Doctrine\DBAL\Connection[]
        */
        public static function getConnections()
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->getConnections();
        }

        /**
        * @return \Concrete\Core\Database\Connection\ConnectionFactory
        */
        public static function getFactory()
        {
            /** @var Concrete\Core\Database\DatabaseManager $instance */
            return $instance->getFactory();
        }

    }

    class Events extends Symfony\Component\EventDispatcher\EventDispatcher
    {

        /** @var Symfony\Component\EventDispatcher\EventDispatcher */
        protected static $instance;

        /**
        * @see EventDispatcherInterface::dispatch
        *
        * @api
        */
        public static function dispatch($eventName, Symfony\Component\EventDispatcher\Event $event = null)
        {
            /** @var Symfony\Component\EventDispatcher\EventDispatcher $instance */
            return $instance->dispatch($eventName, $event);
        }

        /**
        * @see EventDispatcherInterface::getListeners
        */
        public static function getListeners($eventName = null)
        {
            /** @var Symfony\Component\EventDispatcher\EventDispatcher $instance */
            return $instance->getListeners($eventName);
        }

        /**
        * @see EventDispatcherInterface::hasListeners
        */
        public static function hasListeners($eventName = null)
        {
            /** @var Symfony\Component\EventDispatcher\EventDispatcher $instance */
            return $instance->hasListeners($eventName);
        }

        /**
        * @see EventDispatcherInterface::addListener
        *
        * @api
        */
        public static function addListener($eventName, $listener, $priority = 0)
        {
            /** @var Symfony\Component\EventDispatcher\EventDispatcher $instance */
            return $instance->addListener($eventName, $listener, $priority);
        }

        /**
        * @see EventDispatcherInterface::removeListener
        */
        public static function removeListener($eventName, $listener)
        {
            /** @var Symfony\Component\EventDispatcher\EventDispatcher $instance */
            return $instance->removeListener($eventName, $listener);
        }

        /**
        * @see EventDispatcherInterface::addSubscriber
        *
        * @api
        */
        public static function addSubscriber(Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
        {
            /** @var Symfony\Component\EventDispatcher\EventDispatcher $instance */
            return $instance->addSubscriber($subscriber);
        }

        /**
        * @see EventDispatcherInterface::removeSubscriber
        */
        public static function removeSubscriber(Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
        {
            /** @var Symfony\Component\EventDispatcher\EventDispatcher $instance */
            return $instance->removeSubscriber($subscriber);
        }

        /**
        * Triggers the listeners of an event.
        *
        * This method can be overridden to add functionality that is executed
        * for each listener.
        *
        * @param callable[] $listeners The event listeners.
        * @param string     $eventName The name of the event to dispatch.
        * @param Event      $event     The event object to pass to the event handlers/listeners.
        */
        protected static function doDispatch($listeners, $eventName, Symfony\Component\EventDispatcher\Event $event)
        {
            /** @var Symfony\Component\EventDispatcher\EventDispatcher $instance */
            return $instance->doDispatch($listeners, $eventName, $event);
        }

    }

    class Route extends Concrete\Core\Routing\Router
    {

        /** @var Concrete\Core\Routing\Router */
        protected static $instance;

        public static function getList()
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->getList();
        }

        public static function setRequest(Concrete\Core\Http\Request $req)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->setRequest($req);
        }

        public static function register($rtPath, $callback, $rtHandle = null, $additionalAttributes = array())
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->register($rtPath, $callback, $rtHandle, $additionalAttributes);
        }

        public static function registerMultiple(array $routes)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->registerMultiple($routes);
        }

        public static function execute(Concrete\Core\Routing\Route $route, $parameters)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->execute($route, $parameters);
        }

        /**
        * Used by the theme_paths and site_theme_paths files in config/ to hard coded certain paths to various themes
        * @access public
        * @param $path string
        * @param $theme object, if null site theme is default
        * @return void
        */
        public static function setThemeByRoute($path, $theme = null, $wrapper = FILENAME_THEMES_VIEW)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->setThemeByRoute($path, $theme, $wrapper);
        }

        public static function setThemesbyRoutes(array $routes)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->setThemesbyRoutes($routes);
        }

        /**
        * This grabs the theme for a particular path, if one exists in the themePaths array
        * @param string $path
        * @return string|boolean
        */
        public static function getThemeByRoute($path)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->getThemeByRoute($path);
        }

        public static function route($data)
        {
            /** @var Concrete\Core\Routing\Router $instance */
            return $instance->route($data);
        }

    }

    class Log extends Concrete\Core\Logging\Logger
    {

        /** @var Concrete\Core\Logging\Logger */
        protected static $instance;

        /**
        * Initially called - this sets up the log writer to use the concrete5
        * Logs database table (this is the default setting.)
        */
        public static function addDatabaseHandler()
        {
            /** @var Concrete\Core\Logging\Logger $instance */
            return $instance->addDatabaseHandler();
        }

        /**
        * When given a PSR-3 standard log level, returns the
        * internal code for that level.
        */
        public static function getLevelCode($level)
        {
            return Concrete\Core\Logging\Logger::getLevelCode($level);
        }

        /**
        * Returns an array of handlers. Mostly for testing.
        */
        public static function getHandlers()
        {
            /** @var Concrete\Core\Logging\Logger $instance */
            return $instance->getHandlers();
        }

        /**
        * Returns a list of channels that have been used. Requires the database
        *  handler
        */
        public static function getChannels()
        {
            /** @var Concrete\Core\Logging\Logger $instance */
            return $instance->getChannels();
        }

        /**
        * Clears all log entries. Requires the database handler.
        */
        public static function clearAll()
        {
            return Concrete\Core\Logging\Logger::clearAll();
        }

        /**
        * Clears log entries by channel. Requires the database handler.
        */
        public static function clearByChannel($channel)
        {
            return Concrete\Core\Logging\Logger::clearByChannel($channel);
        }

        /**
        * Gets the name of the logging level.
        *
        * @param  integer $level
        * @return string
        */
        public static function getLevelDisplayName($level)
        {
            return Concrete\Core\Logging\Logger::getLevelDisplayName($level);
        }

        public static function getChannelDisplayName($channel)
        {
            return Concrete\Core\Logging\Logger::getChannelDisplayName($channel);
        }

        /**
        * @return string
        */
        public static function getName()
        {
            /** @var Monolog\Logger $instance */
            return $instance->getName();
        }

        /**
        * Pushes a handler on to the stack.
        *
        * @param HandlerInterface $handler
        */
        public static function pushHandler(Monolog\Handler\HandlerInterface $handler)
        {
            /** @var Monolog\Logger $instance */
            return $instance->pushHandler($handler);
        }

        /**
        * Pops a handler from the stack
        *
        * @return HandlerInterface
        */
        public static function popHandler()
        {
            /** @var Monolog\Logger $instance */
            return $instance->popHandler();
        }

        /**
        * Adds a processor on to the stack.
        *
        * @param callable $callback
        */
        public static function pushProcessor($callback)
        {
            /** @var Monolog\Logger $instance */
            return $instance->pushProcessor($callback);
        }

        /**
        * Removes the processor on top of the stack and returns it.
        *
        * @return callable
        */
        public static function popProcessor()
        {
            /** @var Monolog\Logger $instance */
            return $instance->popProcessor();
        }

        /**
        * @return callable[]
        */
        public static function getProcessors()
        {
            /** @var Monolog\Logger $instance */
            return $instance->getProcessors();
        }

        /**
        * Adds a log record.
        *
        * @param  integer $level   The logging level
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function addRecord($level, $message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->addRecord($level, $message, $context);
        }

        /**
        * Adds a log record at the DEBUG level.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function addDebug($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->addDebug($message, $context);
        }

        /**
        * Adds a log record at the INFO level.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function addInfo($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->addInfo($message, $context);
        }

        /**
        * Adds a log record at the NOTICE level.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function addNotice($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->addNotice($message, $context);
        }

        /**
        * Adds a log record at the WARNING level.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function addWarning($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->addWarning($message, $context);
        }

        /**
        * Adds a log record at the ERROR level.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function addError($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->addError($message, $context);
        }

        /**
        * Adds a log record at the CRITICAL level.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function addCritical($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->addCritical($message, $context);
        }

        /**
        * Adds a log record at the ALERT level.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function addAlert($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->addAlert($message, $context);
        }

        /**
        * Adds a log record at the EMERGENCY level.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function addEmergency($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->addEmergency($message, $context);
        }

        /**
        * Gets all supported logging levels.
        *
        * @return array Assoc array with human-readable level names => level codes.
        */
        public static function getLevels()
        {
            return Monolog\Logger::getLevels();
        }

        /**
        * Gets the name of the logging level.
        *
        * @param  integer $level
        * @return string
        */
        public static function getLevelName($level)
        {
            return Monolog\Logger::getLevelName($level);
        }

        /**
        * Converts PSR-3 levels to Monolog ones if necessary
        *
        * @param string|int Level number (monolog) or name (PSR-3)
        * @return int
        */
        public static function toMonologLevel($level)
        {
            return Monolog\Logger::toMonologLevel($level);
        }

        /**
        * Checks whether the Logger has a handler that listens on the given level
        *
        * @param  integer $level
        * @return Boolean
        */
        public static function isHandling($level)
        {
            /** @var Monolog\Logger $instance */
            return $instance->isHandling($level);
        }

        /**
        * Adds a log record at an arbitrary level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  mixed   $level   The log level
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function log($level, $message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->log($level, $message, $context);
        }

        /**
        * Adds a log record at the DEBUG level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function debug($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->debug($message, $context);
        }

        /**
        * Adds a log record at the INFO level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function info($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->info($message, $context);
        }

        /**
        * Adds a log record at the INFO level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function notice($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->notice($message, $context);
        }

        /**
        * Adds a log record at the WARNING level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function warn($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->warn($message, $context);
        }

        /**
        * Adds a log record at the WARNING level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function warning($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->warning($message, $context);
        }

        /**
        * Adds a log record at the ERROR level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function err($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->err($message, $context);
        }

        /**
        * Adds a log record at the ERROR level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function error($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->error($message, $context);
        }

        /**
        * Adds a log record at the CRITICAL level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function crit($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->crit($message, $context);
        }

        /**
        * Adds a log record at the CRITICAL level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function critical($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->critical($message, $context);
        }

        /**
        * Adds a log record at the ALERT level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function alert($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->alert($message, $context);
        }

        /**
        * Adds a log record at the EMERGENCY level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function emerg($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->emerg($message, $context);
        }

        /**
        * Adds a log record at the EMERGENCY level.
        *
        * This method allows for compatibility with common interfaces.
        *
        * @param  string  $message The log message
        * @param  array   $context The log context
        * @return Boolean Whether the record has been processed
        */
        public static function emergency($message, array $context = array())
        {
            /** @var Monolog\Logger $instance */
            return $instance->emergency($message, $context);
        }

    }

    class Image extends Imagine\Gd\Imagine
    {

        /** @var Imagine\Gd\Imagine */
        protected static $instance;

        /**
        * {@inheritdoc}
        */
        public static function create(Imagine\Image\BoxInterface $size, Imagine\Image\Palette\Color\ColorInterface $color = null)
        {
            /** @var Imagine\Gd\Imagine $instance */
            return $instance->create($size, $color);
        }

        /**
        * {@inheritdoc}
        */
        public static function open($path)
        {
            /** @var Imagine\Gd\Imagine $instance */
            return $instance->open($path);
        }

        /**
        * {@inheritdoc}
        */
        public static function load($string)
        {
            /** @var Imagine\Gd\Imagine $instance */
            return $instance->load($string);
        }

        /**
        * {@inheritdoc}
        */
        public static function read($resource)
        {
            /** @var Imagine\Gd\Imagine $instance */
            return $instance->read($resource);
        }

        /**
        * {@inheritdoc}
        */
        public static function font($file, $size, Imagine\Image\Palette\Color\ColorInterface $color)
        {
            /** @var Imagine\Gd\Imagine $instance */
            return $instance->font($file, $size, $color);
        }

        /**
        * @param MetadataReaderInterface $metadataReader
        *
        * @return ImagineInterface
        */
        public static function setMetadataReader(Imagine\Image\Metadata\MetadataReaderInterface $metadataReader)
        {
            /** @var Imagine\Image\AbstractImagine $instance */
            return $instance->setMetadataReader($metadataReader);
        }

        /**
        * @return MetadataReaderInterface
        */
        public static function getMetadataReader()
        {
            /** @var Imagine\Image\AbstractImagine $instance */
            return $instance->getMetadataReader();
        }

        /**
        * Checks a path that could be used with ImagineInterface::open and returns
        * a proper string.
        *
        * @param string|object $path
        *
        * @return string
        *
        * @throws InvalidArgumentException In case the given path is invalid.
        */
        protected static function checkPath($path)
        {
            /** @var Imagine\Image\AbstractImagine $instance */
            return $instance->checkPath($path);
        }

    }

    class Config extends Concrete\Core\Config\Repository\Repository
    {

        /** @var Concrete\Core\Config\Repository\Repository */
        protected static $instance;

        /**
        * Clear specific key
        *
        * @param string $key
        */
        public static function clear($key)
        {
            /** @var Concrete\Core\Config\Repository\Repository $instance */
            return $instance->clear($key);
        }

        /**
        * Save a key
        *
        * @param $key
        * @param $value
        * @return bool
        */
        public static function save($key, $value)
        {
            /** @var Concrete\Core\Config\Repository\Repository $instance */
            return $instance->save($key, $value);
        }

        public static function clearCache()
        {
            /** @var Concrete\Core\Config\Repository\Repository $instance */
            return $instance->clearCache();
        }

        public static function clearNamespace($namespace)
        {
            /** @var Concrete\Core\Config\Repository\Repository $instance */
            return $instance->clearNamespace($namespace);
        }

        /**
        * @return SaverInterface
        */
        public static function getSaver()
        {
            /** @var Concrete\Core\Config\Repository\Repository $instance */
            return $instance->getSaver();
        }

        protected static function getPackageNamespace($package, $namespace)
        {
            /** @var Concrete\Core\Config\Repository\Repository $instance */
            return $instance->getPackageNamespace($package, $namespace);
        }

        /**
        * Determine if the given configuration value exists.
        *
        * @param  string  $key
        * @return bool
        */
        public static function has($key)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->has($key);
        }

        /**
        * Determine if a configuration group exists.
        *
        * @param  string  $key
        * @return bool
        */
        public static function hasGroup($key)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->hasGroup($key);
        }

        /**
        * Get the specified configuration value.
        *
        * @param  string  $key
        * @param  mixed   $default
        * @return mixed
        */
        public static function get($key, $default = null)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->get($key, $default);
        }

        /**
        * Set a given configuration value.
        *
        * @param  string  $key
        * @param  mixed   $value
        * @return void
        */
        public static function set($key, $value)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->set($key, $value);
        }

        /**
        * Load the configuration group for the key.
        *
        * @param  string  $group
        * @param  string  $namespace
        * @param  string  $collection
        * @return void
        */
        protected static function load($group, $namespace, $collection)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->load($group, $namespace, $collection);
        }

        /**
        * Call the after load callback for a namespace.
        *
        * @param  string  $namespace
        * @param  string  $group
        * @param  array   $items
        * @return array
        */
        protected static function callAfterLoad($namespace, $group, $items)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->callAfterLoad($namespace, $group, $items);
        }

        /**
        * Parse an array of namespaced segments.
        *
        * @param  string  $key
        * @return array
        */
        protected static function parseNamespacedSegments($key)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->parseNamespacedSegments($key);
        }

        /**
        * Parse the segments of a package namespace.
        *
        * @param  string  $key
        * @param  string  $namespace
        * @param  string  $item
        * @return array
        */
        protected static function parsePackageSegments($key, $namespace, $item)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->parsePackageSegments($key, $namespace, $item);
        }

        /**
        * Register a package for cascading configuration.
        *
        * @param  string  $package
        * @param  string  $hint
        * @param  string  $namespace
        * @return void
        */
        public static function package($package, $hint, $namespace = null)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->package($package, $hint, $namespace);
        }

        /**
        * Register an after load callback for a given namespace.
        *
        * @param  string   $namespace
        * @param  \Closure  $callback
        * @return void
        */
        public static function afterLoading($namespace, Closure $callback)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->afterLoading($namespace, $callback);
        }

        /**
        * Get the collection identifier.
        *
        * @param  string  $group
        * @param  string  $namespace
        * @return string
        */
        protected static function getCollection($group, $namespace = null)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->getCollection($group, $namespace);
        }

        /**
        * Add a new namespace to the loader.
        *
        * @param  string  $namespace
        * @param  string  $hint
        * @return void
        */
        public static function addNamespace($namespace, $hint)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->addNamespace($namespace, $hint);
        }

        /**
        * Returns all registered namespaces with the config
        * loader.
        *
        * @return array
        */
        public static function getNamespaces()
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->getNamespaces();
        }

        /**
        * Get the loader implementation.
        *
        * @return \Illuminate\Config\LoaderInterface
        */
        public static function getLoader()
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->getLoader();
        }

        /**
        * Set the loader implementation.
        *
        * @param \Illuminate\Config\LoaderInterface  $loader
        * @return void
        */
        public static function setLoader(Illuminate\Config\LoaderInterface $loader)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->setLoader($loader);
        }

        /**
        * Get the current configuration environment.
        *
        * @return string
        */
        public static function getEnvironment()
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->getEnvironment();
        }

        /**
        * Get the after load callback array.
        *
        * @return array
        */
        public static function getAfterLoadCallbacks()
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->getAfterLoadCallbacks();
        }

        /**
        * Get all of the configuration items.
        *
        * @return array
        */
        public static function getItems()
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->getItems();
        }

        /**
        * Determine if the given configuration option exists.
        *
        * @param  string  $key
        * @return bool
        */
        public static function offsetExists($key)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->offsetExists($key);
        }

        /**
        * Get a configuration option.
        *
        * @param  string  $key
        * @return mixed
        */
        public static function offsetGet($key)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->offsetGet($key);
        }

        /**
        * Set a configuration option.
        *
        * @param  string  $key
        * @param  mixed  $value
        * @return void
        */
        public static function offsetSet($key, $value)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->offsetSet($key, $value);
        }

        /**
        * Unset a configuration option.
        *
        * @param  string  $key
        * @return void
        */
        public static function offsetUnset($key)
        {
            /** @var Illuminate\Config\Repository $instance */
            return $instance->offsetUnset($key);
        }

        /**
        * Parse a key into namespace, group, and item.
        *
        * @param  string  $key
        * @return array
        */
        public static function parseKey($key)
        {
            /** @var Illuminate\Support\NamespacedItemResolver $instance */
            return $instance->parseKey($key);
        }

        /**
        * Parse an array of basic segments.
        *
        * @param  array  $segments
        * @return array
        */
        protected static function parseBasicSegments(array $segments)
        {
            /** @var Illuminate\Support\NamespacedItemResolver $instance */
            return $instance->parseBasicSegments($segments);
        }

        /**
        * Set the parsed value of a key.
        *
        * @param  string  $key
        * @param  array   $parsed
        * @return void
        */
        public static function setParsedKey($key, $parsed)
        {
            /** @var Illuminate\Support\NamespacedItemResolver $instance */
            return $instance->setParsedKey($key, $parsed);
        }

    }

}
