<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Devices
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> All Devices</div>


                        <script>
                            function displayListDevices(url){
                                return fetch(url)
                                    .then(response => response.json())
                                    .then(data => {
                                        document.getElementById("list").innerHTML = JSON.stringify(data);
                                    });
                            }
                            function postData(url, data) {
                                return fetch(url, {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json"
                                    },
                                    body: JSON.stringify(data)
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        return data;
                                    });
                            }
                            function getListDevices(url) {
                                changeElementDisplay('button', 'none');
                                changeElementDisplay('retour', '');
                                return fetch(url)
                                    .then(response => response.json())
                                    .then(data => {
                                        changeElementInnerHTML('list', data);
                                        console.log(data);
                                    });
                            }

                            function goBack(){
                                document.getElementById('list').innerHTML = '';
                                changeElementDisplay('button', '');
                                changeElementDisplay('retour', 'none');
                            }

                            function changeElementDisplay(element, state){
                                document.getElementById(element).style.display = state;
                            }

                            function changeElementInnerHTML(element, data) {
                                console.log(data.length);
                                for(i = 0; i < data.length; i++){
                                    document.getElementById(element).innerHTML += ('<p>Id :' + data[i].id + ', nom : ' + data[i].nom + ', valeur : ' + data[i].value + '</p>');
                                }
                            }

                            function postData(url, data) {
                                return fetch(url, {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json"
                                    },
                                    body: JSON.stringify(data)
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        return data;
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
                                                <th scope="col"> Device/{id}</th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            <tr>

                                                <td>
                                                    <!-- normalement on comunique avce l'host http://vb.api/ -->
                                                    <button id="button" class="btn btn-infos"  onclick="getListDevices('https://raw.githubusercontent.com/Nathan-BENOIT/TP-Arduino/main/objects.json')"  >Liste des objets connectés</button>
                                                    <div id="list"></div>
                                                    <button id="retour"  class="btn btn-danger" style="display: none;" onclick="goBack()">Retour</button>
                                                </td>
                                                <td>
                                                    <button id="button" class="btn btn-warning" onclick="displayListDevices('https://raw.githubusercontent.com/Nathan-BENOIT/TP-Arduino/main/objects.json')">Modifie</button>
                                                    <button id="button" class="btn btn-success" onclick="postData('https://geo.api.gouv.fr/regions/32')">Save</button>

                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <div id="list"></div>
                                                </td>
                                                <td>
                                                    <div id="list"></div>
                                                </td>
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

