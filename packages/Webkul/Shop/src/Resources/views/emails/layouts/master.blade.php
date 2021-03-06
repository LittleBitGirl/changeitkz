<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC:400,500" rel="stylesheet" type="text/css">
    </head>

    <body style="font-family: 'Noto Sans SC', sans-serif;">
        <div style="max-width: 1000px; margin-left: auto; margin-right: auto;">
            <div style="text-align: center;">
                {{ $header ?? '' }}
            </div>

            <div>
                {{ $slot }}

                {{ $subcopy ?? '' }}
            </div>
        </div>
    </body>
</html>
