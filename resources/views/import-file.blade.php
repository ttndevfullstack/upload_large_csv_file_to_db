<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webcrumbs Plugin</title>
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Open+Sans&display=swap);

        @import url(https://fonts.googleapis.com/css2?family=Lato&display=swap);

        /*! tailwindcss v3.4.11 | MIT License | https://tailwindcss.com*/
        *,
        :after,
        :before {
            border: 0 solid #e5e7eb;
            box-sizing: border-box;
        }

        :after,
        :before {
            --tw-content: "";
        }

        :host,
        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            font-family:
                Open Sans,
                ui-sans-serif,
                system-ui,
                sans-serif,
                Apple Color Emoji,
                Segoe UI Emoji,
                Segoe UI Symbol,
                Noto Color Emoji;
            font-feature-settings: normal;
            font-variation-settings: normal;
            -moz-tab-size: 4;
            tab-size: 4;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            line-height: inherit;
            margin: 0;
        }

        hr {
            border-top-width: 1px;
            color: inherit;
            height: 0;
        }

        abbr:where([title]) {
            text-decoration: underline dotted;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        pre,
        samp {
            font-family:
                ui-monospace,
                SFMono-Regular,
                Menlo,
                Monaco,
                Consolas,
                Liberation Mono,
                Courier New,
                monospace;
            font-feature-settings: normal;
            font-size: 1em;
            font-variation-settings: normal;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        table {
            border-collapse: collapse;
            border-color: inherit;
            text-indent: 0;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            color: inherit;
            font-family: inherit;
            font-feature-settings: inherit;
            font-size: 100%;
            font-variation-settings: inherit;
            font-weight: inherit;
            letter-spacing: inherit;
            line-height: inherit;
            margin: 0;
            padding: 0;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        input:where([type="button"]),
        input:where([type="reset"]),
        input:where([type="submit"]) {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none;
        }

        :-moz-focusring {
            outline: auto;
        }

        :-moz-ui-invalid {
            box-shadow: none;
        }

        progress {
            vertical-align: baseline;
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        summary {
            display: list-item;
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0;
        }

        fieldset {
            margin: 0;
        }

        fieldset,
        legend {
            padding: 0;
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        dialog {
            padding: 0;
        }

        textarea {
            resize: vertical;
        }

        input::placeholder,
        textarea::placeholder {
            color: #9ca3af;
            opacity: 1;
        }

        [role="button"],
        button {
            cursor: pointer;
        }

        :disabled {
            cursor: default;
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle;
        }

        img,
        video {
            height: auto;
            max-width: 100%;
        }

        [hidden] {
            display: none;
        }

        *,
        :after,
        :before {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style: ;
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style: ;
        }

        #webcrumbs .mb-4 {
            margin-bottom: 16px;
        }

        #webcrumbs .mb-6 {
            margin-bottom: 24px;
        }

        #webcrumbs .block {
            display: block;
        }

        #webcrumbs .flex {
            display: flex;
        }

        #webcrumbs .min-h-\[600px\] {
            min-height: 600px;
        }

        #webcrumbs .w-\[600px\] {
            width: 600px;
        }

        #webcrumbs .w-full {
            width: 100%;
        }

        #webcrumbs .flex-row {
            flex-direction: row;
        }

        #webcrumbs .items-center {
            align-items: center;
        }

        #webcrumbs .justify-between {
            justify-content: space-between;
        }

        #webcrumbs .gap-4 {
            gap: 16px;
        }

        #webcrumbs .rounded-lg {
            border-radius: 24px;
        }

        #webcrumbs .rounded-md {
            border-radius: 18px;
        }

        #webcrumbs .bg-primary-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(115 65 255 / var(--tw-bg-opacity));
        }

        #webcrumbs .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        #webcrumbs .p-8 {
            padding: 32px;
        }

        #webcrumbs .px-6 {
            padding-left: 24px;
            padding-right: 24px;
        }

        #webcrumbs .py-2 {
            padding-bottom: 8px;
            padding-top: 8px;
        }

        #webcrumbs .font-title {
            font-family:
                Lato,
                ui-sans-serif,
                system-ui,
                sans-serif,
                Apple Color Emoji,
                Segoe UI Emoji,
                Segoe UI Symbol,
                Noto Color Emoji;
        }

        #webcrumbs .text-4xl {
            font-size: 36px;
            line-height: 41.4px;
        }

        #webcrumbs .text-xl {
            font-size: 20px;
            line-height: 28px;
        }

        #webcrumbs .text-neutral-950 {
            --tw-text-opacity: 1;
            color: rgb(40 40 40 / var(--tw-text-opacity));
        }

        #webcrumbs .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        #webcrumbs .shadow-lg {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -4px rgba(0, 0, 0, 0.1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),
                0 4px 6px -4px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        #webcrumbs {
            font-family: Open Sans !important;
            font-size: 16px !important;
        }

        #webcrumbs :is(.bg-primary-500) {
            color: hsla(0, 0%, 100%, 0.9) !important;
        }

        #webcrumbs .hover\:bg-primary-600:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(99 27 255 / var(--tw-bg-opacity));
        }

        body {
            line-height: inherit;
            padding: 24px;
            display: flex;
            flex-direction: column;
            min-width: 100vw;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #ffffff, #d4d4d4);
        }

        .error-message {
            background-color: #fdecea;
            color: #b71c1c;
            border: 1px solid #f5c6c6;
            padding: 16px;
            border-radius: 8px;
            margin-bottom: 16px;
            font-size: 14px;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div id="webcrumbs">
        <div class="w-[600px] bg-white rounded-lg shadow-lg min-h-[600px] p-8">
            <h1 class="text-4xl font-title text-neutral-950 mb-6">Upload Your File</h1>
            <form method="POST" action="{{ route('csv.import') }}" enctype="multipart/form-data">
                @csrf
                <label class="block text-neutral-950 text-xl mb-4" for="file-upload">Choose a file to upload:</label>
                <input class="block w-full text-neutral-950 mb-6" type="file" id="file-upload" name="csv_file"
                    accept=".csv" />

                {{-- Error messages --}}
                @if ($errors->any())
                    <div class="error-message">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <button class="bg-primary-500 hover:bg-primary-600 text-white rounded-md py-2 px-6"
                    type="submit">Upload</button>
            </form>
        </div>
    </div>
</body>

</html>
