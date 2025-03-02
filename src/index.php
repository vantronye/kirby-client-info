<?php

namespace Vantronye\KirbyClientInfo;

/**
 * Main plugin class
 */
class Plugin {
    /**
     * @var \Kirby\Cms\App
     */
    protected $kirby;

    /**
     * @param \Kirby\Cms\App $kirby
     */
    public function __construct($kirby) {
        $this->kirby = $kirby;
    }

    /**
     * Get the client info
     *
     * @return array
     */
    public function getClientInfo(): array {
        // Get the client info from site.txt
        $site = $this->kirby->site();
        $clientInfo = $site->clientInfo()->toStructure()->toArray();
        
        return $clientInfo ?: [];
    }

    /**
     * Save the client info
     *
     * @param array $clientInfo
     * @return bool
     */
    public function saveClientInfo(array $clientInfo): bool {
        try {
            $site = $this->kirby->site();
            return $site->update(['clientInfo' => \Kirby\Data\Yaml::encode($clientInfo)]);
        } catch (\Exception $e) {
            return false;
        }
    }
}
