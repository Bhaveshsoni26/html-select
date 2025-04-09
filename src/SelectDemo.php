<?php

namespace Flux\HtmlSelect;

use Livewire\Component;

class SelectDemo extends Component
{
    public $industry = '';
    public $industries = [
        'photography' => 'Photography',
        'design' => 'Design services',
        'web' => 'Web development',
        'accounting' => 'Accounting',
        'legal' => 'Legal services',
        'consulting' => 'Consulting',
        'other' => 'Other'
    ];

    public function updatedIndustry($value)
    {
        // This method will be called whenever the industry value changes
        session()->flash('message', 'Industry updated to: ' . $value);
    }

    public function render()
    {
        return view('html-select::livewire.select-demo');
    }
}
