<x-app-layout>
    <x-slot name="header">
        <h2 class="text-3xl font-bold py-5">{{ __('Новая заявка')}}</h2>
    </x-slot>
    
    <form class="mx-auto max-w-2xl p-4 md:p-5 space-y-4 flex flex-col gap-5" method="POST" action="{{route('reports.store')}}">
        @csrf
        <div class="flex flex-col gap-5">
            <div>
                <x-input-label for="address" :value="__('Адрес')"/>
                <x-text-input id="address" class="block mt-1" type="text" name="address" required/>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="contact" :value="__('Контактные данные (telegram)')"/>
                <x-text-input id="contact" class="block mt-1" name="contact" required/>
                <x-input-error :messages="$errors->get('contact')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="date" :value="__('Дата')"/>
                <input type='date' id="date" class="block mt-1" name="date" required/>
                <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="time" :value="__('Время')"/>
                <input type='time' id="time" class="block mt-1" name="time" required/>
                <x-input-error :messages="$errors->get('time')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="service" :value="__('Вид услуги')"/>
                <select id="service" class="block mt-1" name="service" required>
                    <option value="clining">clining</option>
                    <option value="marjclining">ген уборка</option>
                </select>
                <x-input-error :messages="$errors->get('time')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="payment" :value="__('Оплата')"/>
                <x-text-input id="payment" class="block mt-1" name="payment" required/>
                <x-input-error :messages="$errors->get('time')" class="mt-2" />
            </div>
            <div>
                <x-primary-button class="ms-3">
                    {{__('Создать')}}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>