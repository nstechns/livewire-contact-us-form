<div>

    @if(!empty($successMessage))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $successMessage }}
            <button type="button" wire:click="$set('successMessage',null)" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

        <form wire:submit.prevent="submitFormContact">


            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                <div class="col-md-6">
                    <input
                        wire:model="name"
                        type="text"
                        class="form-control  @error('name') is-invalid @enderror"
                        autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror

                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                <div class="col-md-6">
                    <input
                        wire:model="email"
                        type="email"
                        class="form-control   @error('email') is-invalid @enderror"
                    >
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>
                <div class="col-md-6">
                    <input
                        wire:model="phone"
                        type="number"
                        class="form-control @error('phone') is-invalid @enderror"
                    >
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="message" class="col-md-4 col-form-label text-md-right">Message</label>
                <div class="col-md-6">
                    <textarea class="form-control @error('message') is-invalid @enderror" wire:model="message" ></textarea>
                    @error('message')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                </div>
            </div>


        </form>


</div>
