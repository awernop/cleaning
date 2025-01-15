<x-app-layout>

  <div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
    <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-350" href="{{ route('reports.create') }}">
                {{ __('СОЗДАТЬ ЗАЯВКУ') }}
            </a>
            <div class='flex flex-wrap gap-4'>
            @foreach($reports as $report)
          <div class='div-col border bg-gray-200 rounded-md p-6 mt-4 w-80'>
            <p class="text-sm text-gray-500">{{\Carbon\Carbon::parse($report->created_at)->translatedFormat('j F Y')}}</p>
            <span class='text-xl font-semibold	'>{{$report->address}}</span>
            <p class='text-blue-500'>{{$report->contact}}</p>
            <p>{{$report->date}}</p>
            <p>{{$report->time}}</p>
            <p>{{$report->payment}}</p>
          </div>
        @endforeach
            </div>
        
      </div>
      @if(count($reports)===0)
      <div class="flex place-content-center pt-48">
        <span class='font-semibold text-4xl uppercase tracking-widest text-gray-300'>Пока тут ничего нет</span>
      </div>
      @endif
    </div>
  </div>
</x-app-layout>