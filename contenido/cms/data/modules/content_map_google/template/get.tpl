<!-- content_map_google -->

{if true eq $isBackendEditMode}
    <label class="content_type_label">{$trans.header}</label>
{/if}
<div>{$header}</div>



{if false eq $isBackendEditMode}
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <div id="googleMap"></div>
{/if}

{if true eq $isBackendEditMode}
    <label class="content_type_label">{$trans.address}</label>
    <div>{$address}</div>
{ELSE}
    <div id="address">{$address}</div>
{/if}


{if true eq $isBackendEditMode}

    <label class="content_type_label">{$trans.latitude}</label>
    <div>{$lat}</div>

    <label class="content_type_label">{$trans.longitude}</label>
    <div>{$lng}</div>

{else}

    <div id="clearFloat">
        <input type="hidden" id="lat" value="{$lat}" />
        <input type="hidden" id="lon" value="{$lng}" />
    </div>

{/if}

<!-- /content_map_google -->
