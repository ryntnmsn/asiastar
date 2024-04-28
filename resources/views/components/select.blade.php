<select {!! $attributes->merge(['class' => 'bg-slate-50 border border-slate-300 text-slate-700 rounded-lg focus:ring-amber-500 focus:border-amber-500 block p-2']) !!}>

    {{ $slot }}

</select>
