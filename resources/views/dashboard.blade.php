<x-app-layout>
    <x-slot name="header">

    </x-slot>
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
                            <th scope="col">All Device</th>


                        </tr>
                        </thead>
                        <tbody>


                        <tr>

                            <td>
                                <button id="button" class="btn btn-info" onclick="displayListDevices('https://geo.api.gouv.fr/regions')">Liste des objets connectés</button>
                                <div id="list"></div>
                            <td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
