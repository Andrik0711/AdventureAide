@extends('layouts.app')
@section('body')

<div class="min-h-screen w-full flex items-center justify-center bg-blue-100 px-4 sm:px-6 lg:px-8">
    <img style="border:20px;margin:50px;float:left;width:500px;height: 500px;" class="object-cover" src="https://images.unsplash.com/photo-1464746133101-a2c3f88e0dd9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1327&q=80">
    <hr>

    <div class="max-w-md w-full">
        <div>
            <img class="mx-auto h-20 w-auto" src="{{ asset('images/airplane.png') }}" alt="Workflow">
            <h2 class="mt-6 text-center text-3xl font-bold text-gray-900">
                Trazando el viaje de tus sueños
            </h2>
            <p class="mt-2 text-center text-sm text-gray-600">
                Responde las preguntas:
            </p>
        </div>
        <form class="mt-8 space-y-6" action="#" method="POST" id="form-stepper">
            <div class="step step-1">
                <div class="rounded-md shadow-sm -space-y-px mb-10">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad-personas">Con quién viajas</label>
                        <select class="mb-5 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="familia">Viaje familiar</option>
                            <option value="amigos">Viaje con amigos</option>
                            <option value="solo">Viaje solitario</option>
                            <option value="trabajo">Viaje de trabajo</option>
                        </select>
                    </div>
                    <div class="mb-10">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad-personas">Selecciona la cantidad de personas</label>
                        <input type="number" id="cantidad-personas" name="cantidad-personas" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm" placeholder="Ingresa la cantidad de personas" min="1" max="10">
                    </div>
                </div>
            </div>
            <div class="step step-2 hidden">
                <div class="rounded-md shadow-sm -space-y-px mb-10">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad-personas">Selecciona el tipo de viaje</label>
                        <select class="mb-5 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="familia">Aventurero</option>
                            <option value="amigos">Viaje con amigos</option>
                            <option value="solo">Viaje solitario</option>
                            <option value="trabajo">Viaje de trabajo</option>
                        </select>
                    </div>
                    <div>
                      <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad-personas">Lugares que prefieres</label>
                      <select class="mb-5 appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-blue-500 focus:border-blue-500 focus:z-10 sm:text-sm">
                          <option value="" disabled selected>Selecciona una opción</option>
                          <option value="familia">Aventurero</option>
                          <option value="amigos">Viaje con amigos</option>
                          <option value="solo">Viaje solitario</option>
                          <option value="trabajo">Viaje de trabajo</option>
                      </select>
                  </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <!-- Botón de "Volver" oculto en el primer paso -->
                <button id="back" type="button" class="hidden col-span-1 w-full justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50">
                    Volver
                </button>

                <button id="signin" type="button" class="col-span-1 w-full justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50" aria-required="true">
                    Siguiente
                </button>
            </div>
            <!-- Botón de "Enviar" oculto en el formulario -->
            <div>
                <button id="form-submit" type="submit" class="hidden w-full justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-lightblue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-50" aria-required="true">
                    Enviar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        var currentStep = 1;
        var totalSteps = $(".step").length;

        // Al hacer clic en el botón "Siguiente"
        $("#signin").on("click", function (e) {
            e.preventDefault();

            // Validación de campos (puedes agregar tu propia validación aquí)

            // Ocultar el paso actual
            $(".step-" + currentStep).addClass("hidden");

            // Incrementar el paso actual
            currentStep++;

            // Si llegamos al último paso, ocultar el botón "Siguiente" y mostrar el botón "Enviar"
            if (currentStep === totalSteps) {
                $("#signin").addClass("hidden");
                $("#form-submit").removeClass("hidden");
            }

            // Mostrar el siguiente paso
            $(".step-" + currentStep).removeClass("hidden");

            // Mostrar el botón "Volver" si no estamos en el primer paso
            if (currentStep > 1) {
                $("#back").removeClass("hidden");
            }
        });

        // Al hacer clic en el botón "Volver"
        $("#back").on("click", function (e) {
            e.preventDefault();

            // Validación de campos (puedes agregar tu propia validación aquí)

            // Ocultar el paso actual
            $(".step-" + currentStep).addClass("hidden");

            // Decrementar el paso actual
            currentStep--;

            // Si volvemos al primer paso, ocultar el botón "Volver"
            if (currentStep === 1) {
                $("#back").addClass("hidden");
            }

            // Mostrar el paso anterior
            $(".step-" + currentStep).removeClass("hidden");

            // Mostrar el botón "Siguiente"
            $("#signin").removeClass("hidden");
            // Ocultar el botón "Enviar" si volvemos a un paso anterior
            $("#form-submit").addClass("hidden");
        });
    });
</script>
@endpush
