<div>
<div class="card-body">
            <h6>SEO</h6>
            <input type="hidden" wire:model="selected_id">
            <div class="input-group wow BounceInUp">
                <span class="input-group-text" style="width: 100px;">Denumire</span>
                <input class="form-control" type="text" wire:model="name" >
            </div>

            <div class="input-group wow BounceInDown">
                <span class="input-group-text">Link</span>
                <input class="form-control" type="text" wire:model="link" >
            </div>

            <div class="input-group wow SlideInUp">
                <span class="input-group-text">Title</span>
                <input class="form-control" type="text" wire:model="title" >
            </div>

            <div class="input-group wow SlideInDown">
                <span class="input-group-text">Keywords</span>
                <input  class="form-control" type="text" wire:model="keywords" >
            </div>

            <div class="input-group wow BounceInUp">
                <span class="input-group-text">Description</span>
                <input class="form-control" type="text" wire:model="description">
            </div>

            <hr class="mt-4 mb-4">

            <h6>Text pagina</h6>

{{--            <div class="card-body" style="padding-bottom: 0px;" wire:ignore >--}}
{{--                <textarea id="editor1" cols="30" rows="20"   name="text"--}}
{{--                        wire:model.lazy="text"></textarea>--}}
{{--            </div>--}}
            <hr>
        </div>

        <div class="card-body" style="margin-bottom:20px; padding-top: 0px;">
        <button class="btn btn-success-gradien btn-lg" wire:click="update()" style="float: left;">
            <i class="icofont icofont-pencil"></i> Modifica
        </button>
        </div>

        </div>