<?php

namespace App\Http\Livewire;

use App\Models\Admin\Pagini;
use Illuminate\Http\Request;
use Livewire\Component;

class Paginiupdate extends Component
{
	public $selected_id, $link, $name, $description,$keywords,$title;

	public function render(Request $page)
    {

      $url = str_replace(array(' HTTP', ' /admin'), '', $page);
		 $link = explode('/', $url);
		 $pagina = Pagini::where('link','=',$link[1])->where('id_lang','1')->get();

//      $this->selected_id = $pagina->id;
//      $this->name =  $pagina->name;
//      $this->title =  $pagina->title;
//				$this->link =  $pagina->link;
//				$this->keywords =  $pagina->keywords;
//				$this->description =  $pagina->description;
//				$this->text =  html_entity_decode($pagina->text);

			foreach($pagina as $p)
			{
			 $this->selected_id = $p->id;
				$this->name =  $p->name;
				$this->title =  $p->title;
				$this->link =  $p->link;
				$this->keywords =  $p->keywords;
				$this->description =  $p->description;
				$this->text =  html_entity_decode($p->text);
			}

        return view('livewire.paginiupdate', compact('page'));
    }

	public function update()
		{

			$this->validate([
				                'selected_id' => 'required|numeric',
				                'name' => 'required|min:5'
			                ]);
			if ($this->selected_id) {
				$record = Pagini::find($this->selected_id);
				$record->update([
					                'name' => $this->name,
					                'link' => $this->link,
					                'title' => $this->title,
					                'keywords' => $this->keywords,
					                'description' => $this->description,
					                'text' => $this->text
				                ]);
				$this->dispatchBrowserEvent('alert', [
					'type' => 'success',
					'message' => 'Modificarea a fost efectuata'
				]);
			 }
		}
}