<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Coustomer extends Component
{
    use WithPagination;

    public $search;

    public $parPage = 5;

    protected $paginationTheme = 'bootstrap';

    protected $queryString = ['search'];

    public function render()
    {
        $customers = Customer::where('name', 'LIKE', $this->search)->orwhere('email', 'LIKE', $this->search)->paginate($this->parPage);
        $data = compact('customers');
        return view('livewire.coustomer')->with($data);
    }
}
