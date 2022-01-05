{{-- Componente Modal --}}
@props(['id'])

<div {{ $attributes->merge(['class' => 'modal-background']) }} data-modal="{{ strtolower($modal) }}" id="{{ strtolower($modal) }}">
    <div class="modal {{ $type !== 'default' ? "modal-{$type}" : '' }} {{ $position == 'center' ? 'self-center' : 'relative top-[3rem]' }}">
        <div class="modal-close">
        @if(strtolower($typeClose) == 'square')
            <svg class="icon-svg" data-close="{{ strtolower($modal) }}" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="9" x2="15" y2="15"></line><line x1="15" y1="9" x2="9" y2="15"></line></svg>
        @else
            <svg class="icon-svg" data-close="{{ strtolower($modal) }}" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        @endif
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <p class="font-ubuntu text-xl font-medium text-gray-700">{{ $title }}</p>
            </div>
            <div class="w-full">
                {{ $slot }}
            </div>
        </div>
        <div class="modal-actions">
            {{ $actions ?? '' }}
        </div>
    </div>
</div>

{{--
@switch(strtolower($type))
@case('success')
    <div class="modal modal-success {{ $position == 'center' ? 'self-center' : 'relative top-[3rem]' }}">
@break

@case('danger')
    <div class="modal modal-danger {{ $position == 'center' ? 'self-center' : 'relative top-[3rem]' }}">
@break

@case('warning')
    <div class="modal modal-warning {{ $position == 'center' ? 'self-center' : 'relative top-[3rem]' }}">
@break

@default
    <div class="modal {{ $position == 'center' ? 'self-center' : 'relative top-[3rem]' }}">
@endswitch
 --}}
