<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Digitals
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> All Digitals</div>


                        <script>
                            function displayListDevices(url){
                                return fetch(url)
                                    .then(response => response.json())
                                    .then(data => {
                                        document.getElementById("list").innerHTML = JSON.stringify(data);
                                    });
                            }
                        </script>
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                                <div class="container">
                                    <div class="row">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col"> Digitals List</th>
                                                <th scope="col"> Digital/{id}</th>

                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr>

                                                <td>
                                                    <button id="button" class="btn btn-info" onclick="displayListDevices('https://geo.api.gouv.fr/regions')">Liste des objets connectés</button>
                                                    <div id="list"></div>
                                                <td>
                                                <td>
                                                    <button id="button" class="btn btn-warning" onclick="displayListDevices('https://geo.api.gouv.fr/regions/76')">Modifié</button>
                                                    <div id="list"></div>
                                                <td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>

    {{--        End of Softdelete--}}

    </div>

</x-app-layout>

