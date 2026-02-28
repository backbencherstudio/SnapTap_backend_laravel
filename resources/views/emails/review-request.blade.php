<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>We Value Your Feedback</title>
</head>

<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: Arial, sans-serif;">

    <table width="100%" bgcolor="#f4f6f8" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding:40px 0;">

                <!-- Main Container -->
                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.05);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="padding:30px 20px; background:#0d6efd;">
                            <img src="{{ asset('logo.png') }}" alt="Company Logo" width="180" style="display:block;">
                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:40px 30px; color:#333333; font-size:16px; line-height:1.6;">

                            <p style="margin:0 0 20px 0;">
                                Hi <strong>{{ $review->name }}</strong>,
                            </p>

                            <p style="margin:0 0 20px 0;">
                                {!! nl2br(e($review->message)) !!}
                            </p>

                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center" style="padding: 20px 0;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="border-radius: 8px;"
                                                    bgcolor="{{ $provider === 'facebook' ? '#1877F2' : '#4285F4' }}">
                                                    <a href="{{ $provider === 'facebook' ? 'https://www.facebook.com/' . $externalProviderId . '/reviews/' : 'https://search.google.com/local/writereview?placeid=' . $externalProviderId }}"
                                                        target="_blank"
                                                        style="
                                                            font-size: 16px;
                                                            font-family: Helvetica, Arial, sans-serif;
                                                            color: #ffffff;
                                                            text-decoration: none;
                                                            border-radius: 8px;
                                                            padding: 14px 30px;
                                                            border: 1px solid {{ $provider === 'facebook' ? '#1877F2' : '#4285F4' }};
                                                            display: inline-block;
                                                            font-weight: bold;">

                                                        @if ($provider === 'facebook')
                                                            Review us on Facebook
                                                        @else
                                                            Review us on Google
                                                        @endif
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>


                            <!-- Button -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center">
                                        <a href="{{ $reviewLink }}"
                                            style="background-color:#0d6efd;
                                                  color:#ffffff;
                                                  text-decoration:none;
                                                  padding:14px 28px;
                                                  border-radius:6px;
                                                  font-weight:bold;
                                                  display:inline-block;">
                                            I Already Reviewed
                                        </a>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="padding:25px; background:#f1f1f1; font-size:13px; color:#777;">
                            <p style="margin:0 0 5px 0; font-weight:bold;">
                                {{ config('app.name') }}
                            </p>
                            <p style="margin:0;">
                                © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                            </p>
                        </td>
                    </tr>

                </table>

                <!-- Spacing -->
                <div style="height:30px;"></div>

            </td>
        </tr>
    </table>

</body>

</html>
