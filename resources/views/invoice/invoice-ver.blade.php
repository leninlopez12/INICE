<style>
  .status-label {
      font-size: 1.125rem; /* text-lg */
      font-weight: 600;
      margin-bottom: 0.5rem;
  }

  .status-pending {
      color: #d97706; /* amber-600 */
      background-color: #fef3c7; /* amber-100 */
      padding: 0.25rem 0.5rem;
      border-radius: 0.25rem;
      font-weight: 700;
  }

  .status-issued {
      color: #15803d; /* green-700 */
      background-color: #d1fae5; /* green-100 */
      padding: 0.25rem 0.5rem;
      border-radius: 0.25rem;
      font-weight: 700;
  }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-xl text-fucsia leading-tight">
            {{ __('DETALLES DE LA FACTURA') }}
        </h2>
    </x-slot>

    <div class="w-full max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
            <h3 class="status-label">
                Estado: 
                <span class="{{ $invoice->estado === 'pendiente' ? 'status-pending' : 'status-issued' }}">
                    {{ $invoice->estado }}
                </span>
            </h3>

        <div class="flex justify-between items-center mb-4">
            <h1 class="bg-fucsia text-white px-4 py-2 text-lg font-bold flex items-center">
            <img src="{{ asset('img/logos/inice2.png') }}" alt="" class="w-16 h-6 mr-2"> FACTURA
            </h1>
            <div class="text-right">
            <span class="font-semibold">FACTURA N°</span>
            <p>{{ $invoice->numero_factura }} </p>
            </div>
        </div>

        <h2 class="text-center text-lg font-semibold mb-4">FACTURA</h2>

        <div class="mb-6">
            <p class="font-bold">Nombre/Razón Social</p>
            <p class="text-lg font-comic">{{ $invoice->usuario }} </p>
            <p class="font-bold">DNI/RUC/CÓDIGO TRIBUTARIO</p>
            <p class="text-lg font-comic">{{ $invoice->dni }}</p>
            <p class="text-md font-bold">País</p>
            <p class="text-sm font-italic">{{ $invoice->pais }}</p>
            <p class="text-xs text-gray-500 mt-2">Fecha de Emisión: {{ $invoice->fecha_emision }}</p>
        </div>


        <table class="w-full border-collapse mb-6">
            <thead>
            <tr>
                <th class="bg-fucsia text-white py-2 px-4 text-left">Servicio</th>
                <th class="bg-fucsia text-white py-2 px-4 text-right">Monto</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border-b border-gray-300 py-2 px-4 text-left align-top" rowspan="5">{{($invoice->servicio) }}</td>
                <td class="border-b border-gray-300 py-2 px-4 text-right">{{ $invoice->moneda }} {{ number_format($subtotal, 2) }}</td>
            </tr>
            <tr>
                <td class="border-b border-gray-300 py-2 px-4 text-right">-</td>
            </tr>
            <tr>
                <td class="border-b border-gray-300 py-2 px-4 text-right">-</td>
            </tr>
            <tr>
                <td class="border-b border-gray-300 py-2 px-4 text-right">-</td>
            </tr>
            <tr>
                <td class="border-b border-gray-300 py-2 px-4 text-right">-</td>
            </tr>
            </tbody>
        </table>

        <div class="flex justify-end mb-4">
            <div>
                <p class="flex justify-between font-bold text-base">
                    <span class="pr-5">SUB TOTAL</span> 
                    <span> <span>{{($invoice->moneda) }}</span> {{ number_format($subtotal, 2) }}</span>
                </p>
                <div class="font-bold text-base">
                    <span class="flex justify-between">
                        <span>ITF (6.3%)</span>
                        <span>{{ number_format($itf_amount, 2) }}</span>
                    </span>
                    <span class="flex justify-between">
                        <span>Impuesto (18%)</span>
                        <span>{{ number_format($igv_amount, 2) }}</span>
                    </span>
                </div>

            </div>
        </div>

        <div class="flex justify-end mb-2">
            <div class="flex justify-between w-40 bg-rose-200 p-3 rounded-md border border-fucsia font-semibold">
            <span>TOTAL</span>
            <span>{{ $invoice->moneda }} {{ number_format($invoice->monto_total, 2) }}</span>
            </div>
        </div>

        <div class="mb-4">
            <p class="font-bold text-sm">OBSERVACIÓN:</p>
            <p class="text-sm">{{ $invoice->observacion }}</p>
        </div>
        <div class="mb-4">
            <p>*Documento de control interno</p>
        </div>
        
        <div class="text-center text-xs text-gray-600 mt-4">
        <span> Correo: contacto@inice.edu.pe // Telf.: (+51) 957323789 // Página Web: inice.edu.pe // San Román, Perú</span>
        </div>
        <a href="{{ route('invoices') }}" class="mt-4 inline-block bg-fucsia text-white py-2 px-4 rounded hover:bg-teal-600">
                            Atrás
        </a>
    </div>
</x-app-layout>
