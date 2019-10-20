@extends('admin.layout.base')

@section('title', ' Add Product')

@section('content')



<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "f02ca1dd-29a3-4885-adf0-83ffab908175",
    });
  });
</script>

<script>
OneSignal.push(function() {
    /* These examples are all valid */
    var isPushSupported = OneSignal.isPushNotificationsSupported();
    if (isPushSupported) {
     console.log('itis supporrtes');
    } else {
     console.log('Not Suporetted');
    }

      /* These examples are all valid */
  OneSignal.isPushNotificationsEnabled(function(isEnabled) {
    if (isEnabled)
      console.log("Push notifications are enabled!");
    else
      console.log("Push notifications are not enabled yet.");
  });

  OneSignal.isPushNotificationsEnabled().then(function(isEnabled) {
    if (isEnabled)
      console.log("Push notifications are enabled!");
    else
      console.log("Push notifications are not enabled yet.");
  });


  OneSignal.push(function() {
  OneSignal.showNativePrompt();
});
  });
</script>

@endsection
