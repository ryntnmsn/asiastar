<select {!! $attributes->merge(['class' => 'bg-slate-50 border border-slate-300 text-slate-700 text-sm rounded-lg focus:ring-amber-500 focus:border-amber-500 block w-full max-w-[150px] p-2.5']) !!}>

    {{ $slot }}

</select>
