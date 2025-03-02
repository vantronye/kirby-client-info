<?php

namespace Vantronye\KirbyClientInfo;

use Kirby\Cms\Section;

class ClientInfoSection extends Section {
    public function data(): array {
        $data = [];
        
        if ($clientInfo = $this->model()->clientInfo()->toStructure()) {
            foreach ($clientInfo as $info) {
                $data[] = [
                    'key' => $info->key()->value(),
                    'value' => $info->value()->value(),
                    'description' => $info->description()->value(),
                    'active' => $info->active()->isTrue()
                ];
            }
        }
        
        return $data;
    }
    
    public function toArray(): array {
        return array_merge(parent::toArray(), [
            'data' => $this->data()
        ]);
    }
}

return ClientInfoSection::class;