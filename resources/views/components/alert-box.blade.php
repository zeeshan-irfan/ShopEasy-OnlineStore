<div id="DynamicAlertBox" class="alert alert-{{$alertType}} shadow  alert-dismissible position-absolute top-50 start-50 translate-middle m-0 fade show" role="alert">
    <p class="m-0"><strong>
        {!!$alertIcon!!}  {{$alertReason}} 
    </strong> 
        <br> 
    {{$alertMessage}} </p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<script>


setTimeout(() => {
    const bsAlert = new bootstrap.Alert('#DynamicAlertBox');
bsAlert.close();
}, 3000);
</script>

{{-- @if(session('alertType'))
<x-alert-box :alert-type="session('alertType')" :alert-reason="session('alertReason')" :alert-message="session('alertMessage')" />
@endif   --}}