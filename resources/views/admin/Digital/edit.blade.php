<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Villes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header"> modifier une ville</div>
                            <div class="card-body">
                                <form action="{{  url('city/update/'.$city->id) }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                                        <input type="text" name="city_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$city->name}}">
                                    </div>
                                    @error('city_name')
                                    <span class="text-danger"> {{ $message }} </span>
                                    @enderror

                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
