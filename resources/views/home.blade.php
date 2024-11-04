<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webcrumbs Plugin</title>
    <style>
        @import url(https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200);

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

        #webcrumbs .mt-4 {
            margin-top: 16px;
        }

        #webcrumbs .mt-6 {
            margin-top: 24px;
        }

        #webcrumbs .flex {
            display: flex;
        }

        #webcrumbs .grid {
            display: grid;
        }

        #webcrumbs .min-h-\[600px\] {
            min-height: 600px;
        }

        #webcrumbs .w-\[1000px\] {
            width: 1000px;
        }

        #webcrumbs .w-full {
            width: 100%;
        }

        #webcrumbs .grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        #webcrumbs .flex-row {
            flex-direction: row;
        }

        #webcrumbs .flex-col {
            flex-direction: column;
        }

        #webcrumbs .items-center {
            align-items: center;
        }

        #webcrumbs .justify-center {
            justify-content: center;
        }

        #webcrumbs .justify-between {
            justify-content: space-between;
        }

        #webcrumbs .gap-4 {
            gap: 16px;
        }

        #webcrumbs .gap-8 {
            gap: 32px;
        }

        #webcrumbs .rounded-lg {
            border-radius: 24px;
        }

        #webcrumbs .rounded-md {
            border-radius: 18px;
        }

        #webcrumbs .bg-neutral-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(238 238 238 / var(--tw-bg-opacity));
        }

        #webcrumbs .bg-neutral-200 {
            --tw-bg-opacity: 1;
            background-color: rgb(224 224 224 / var(--tw-bg-opacity));
        }

        #webcrumbs .bg-primary-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(115 65 255 / var(--tw-bg-opacity));
        }

        #webcrumbs .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        #webcrumbs .p-6 {
            padding: 24px;
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

        #webcrumbs .text-center {
            text-align: center;
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

        #webcrumbs .text-3xl {
            font-size: 30px;
            line-height: 36px;
        }

        #webcrumbs .text-6xl {
            font-size: 60px;
            line-height: 66px;
        }

        #webcrumbs .text-xl {
            font-size: 20px;
            line-height: 28px;
        }

        #webcrumbs .font-semibold {
            font-weight: 600;
        }

        #webcrumbs .text-neutral-600 {
            --tw-text-opacity: 1;
            color: rgb(127 127 127 / var(--tw-text-opacity));
        }

        #webcrumbs .text-neutral-950 {
            --tw-text-opacity: 1;
            color: rgb(40 40 40 / var(--tw-text-opacity));
        }

        #webcrumbs .text-primary-50 {
            --tw-text-opacity: 1;
            color: rgb(243 241 255 / var(--tw-text-opacity));
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

        #webcrumbs :is(.bg-neutral-100) {
            color: rgba(0, 0, 0, 0.9) !important;
        }

        #webcrumbs :is(.bg-neutral-200) {
            color: rgba(0, 0, 0, 0.9) !important;
        }

        #webcrumbs :is(.bg-primary-500) {
            color: hsla(0, 0%, 100%, 0.9) !important;
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
    </style>
</head>

<body>
    <div id="webcrumbs">
        <div class="w-[1000px] bg-white rounded-lg shadow-lg min-h-[600px]">
            <header class="w-full bg-primary-500 p-6">
                <h1 class="text-3xl font-title text-primary-50">CSV Feature</h1>
            </header>
            <main class="p-6">
                <div class="grid grid-cols-2 gap-8">
                    <div class="p-8 bg-neutral-100 rounded-md flex flex-col items-center justify-center text-center">
                        <span class="material-symbols-outlined text-6xl">upload_file</span>
                        <h2 class="text-xl font-semibold mt-4 text-neutral-950">Import CSV</h2>
                        <p class="text-neutral-600">Upload a CSV file to import data to the system.</p>
                        <a href="/csv/import">
                            <button class="bg-primary-500 text-primary-50 px-6 py-2 rounded-md mt-6">Import CSV</button>
                        </a>
                    </div>
                    <div class="p-8 bg-neutral-100 rounded-md flex flex-col items-center justify-center text-center">
                        <span class="material-symbols-outlined text-6xl">file_export</span>
                        <h2 class="text-xl font-semibold mt-4 text-neutral-950">Export CSV</h2>
                        <p class="text-neutral-600">Export the data in CSV format.</p>
                        <a href="/csv/export">
                            <button class="bg-primary-500 text-primary-50 px-6 py-2 rounded-md mt-6">Export CSV</button>
                        </a>
                    </div>
                </div>
            </main>
        </div>


    </div>
</body>

</html>
