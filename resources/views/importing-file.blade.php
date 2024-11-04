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

        @import url(https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200);

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

        #webcrumbs .mb-6 {
            margin-bottom: 24px;
        }

        #webcrumbs .mr-2 {
            margin-right: 8px;
        }

        #webcrumbs .mt-6 {
            margin-top: 24px;
        }

        #webcrumbs .mt-2 {
            margin-top: 8px;
        }

        #webcrumbs .flex {
            display: flex;
        }

        #webcrumbs .h-6 {
            height: 24px;
        }

        #webcrumbs .min-h-\[500px\] {
            min-height: 500px;
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

        #webcrumbs .flex-col {
            flex-direction: column;
        }

        #webcrumbs .items-center {
            align-items: center;
        }

        #webcrumbs .justify-between {
            justify-content: space-between;
        }

        #webcrumbs .justify-around {
            justify-content: space-around;
        }

        #webcrumbs .gap-4 {
            gap: 16px;
        }

        #webcrumbs .rounded-full {
            border-radius: 9999px;
        }

        #webcrumbs .rounded-lg {
            border-radius: 24px;
        }

        #webcrumbs .rounded-md {
            border-radius: 18px;
        }

        #webcrumbs .bg-green-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(220 252 231 / var(--tw-bg-opacity));
        }

        #webcrumbs .bg-neutral-200 {
            --tw-bg-opacity: 1;
            background-color: rgb(224 224 224 / var(--tw-bg-opacity));
        }

        #webcrumbs .bg-primary-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(115 65 255 / var(--tw-bg-opacity));
        }

        #webcrumbs .text-primary-500 {
            --tw-bg-opacity: 1;
            color: rgb(115 65 255 / var(--tw-bg-opacity));
        }

        #webcrumbs .bg-red-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 226 226 / var(--tw-bg-opacity));
        }

        #webcrumbs .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        #webcrumbs .p-4 {
            padding: 16px;
        }

        #webcrumbs .p-6 {
            padding: 24px;
        }

        #webcrumbs .px-4 {
            padding-left: 16px;
            padding-right: 16px;
        }

        #webcrumbs .px-6 {
            padding-left: 22px;
            padding-right: 22px;
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

        #webcrumbs .text-3xl {
            font-size: 30px;
            line-height: 36px;
        }

        #webcrumbs .text-xl {
            font-size: 20px;
            line-height: 28px;
        }

        #webcrumbs .text-green-500 {
            --tw-text-opacity: 1;
            color: rgb(34 197 94 / var(--tw-text-opacity));
        }

        #webcrumbs .text-green-600 {
            --tw-text-opacity: 1;
            color: rgb(22 163 74 / var(--tw-text-opacity));
        }

        #webcrumbs .text-neutral-950 {
            --tw-text-opacity: 1;
            color: rgb(40 40 40 / var(--tw-text-opacity));
        }

        #webcrumbs .text-primary-50 {
            --tw-text-opacity: 1;
            color: rgb(243 241 255 / var(--tw-text-opacity));
        }

        #webcrumbs .text-red-500 {
            --tw-text-opacity: 1;
            color: rgb(239 68 68 / var(--tw-text-opacity));
        }

        #webcrumbs .text-red-600 {
            --tw-text-opacity: 1;
            color: rgb(220 38 38 / var(--tw-text-opacity));
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

        .progress-animate {
            transition: width 0.5s ease-in-out;
        }
    </style>
</head>

<body>
    <div id="webcrumbs">
        <div class="w-[600px] bg-white min-h-[500px] rounded-lg shadow-lg p-6 flex flex-col items-center">
            <h1 class="text-3xl font-title mb-6">File Upload Progress</h1>
            <div class="w-full bg-neutral-200 rounded-full h-6 mb-6">
                <div class="bg-primary-500 h-6 rounded-full progress-animate" style="width:0%"></div>
            </div>
            <div class="w-full flex justify-between items-center mb-6"> <span
                    class="notify text-neutral-950">Uploading...</span>
                <span class="text-percent text-neutral-950">0%</span>
            </div>
            <div class="w-full flex justify-around items-center">
                <button class="px-6 py-2 bg-primary-500 text-primary-50 rounded-md">Retry</button>
                <button class="px-6 py-2 bg-primary-500 text-primary-50 rounded-md">Cancel</button>
            </div>
            @if (isset($isSuccess) && $isSuccess)
                <div class="w-full bg-green-100 p-4 mt-6 rounded-md flex items-center"> <span
                        class="material-symbols-outlined text-green-500 mr-2">check_circle</span>
                    <p class="text-green-600">File upload successful!</p>
                </div>
            @endif
            @if (isset($isFailed) && $isFailed)
                <div class="w-full bg-red-100 p-4 mt-6 rounded-md flex items-center"> <span
                        class="material-symbols-outlined text-red-500 mr-2">error</span>
                    <p class="text-red-600">File upload failed. Please try again.</p>
                </div>
            @endif
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const batchId = '{{ $batchId }}';
            const webcrumbs = document.querySelector('#webcrumbs');
            const progressBar = document.querySelector('.bg-primary-500');
            const progressText = document.querySelector('.text-percent');
            const notifyText = document.querySelector('.notify');
            const DOMUploadSuccess = `
                <div class="w-[500px] min-h-[600px] bg-white p-6 rounded-lg shadow-lg flex flex-col justify-center items-center">
                    <span class="material-symbols-outlined text-primary-500" style="font-size:80px">check_circle</span>
                    <h1 class="font-title text-xl text-primary-950 mt-4">File Updated Successfully</h1>
                    <p class="text-neutral-600 mt-2 text-center">
                        Your file has been successfully updated. You can now access it or update more files.
                    </p>
                    <a href='/' class="mt-6">
                        <button class="px-6 py-2 bg-primary-500 text-primary-50 rounded-md">Go to Home</button>
                    </a>
                </div>
            `;

            function checkProgress() {
                fetch(`/batch-status/${batchId}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            progressText.textContent = 'Error checking progress';
                            progressBar.style.backgroundColor = 'red';
                            return;
                        }

                        progressBar.style.width = data.percent + '%';
                        progressText.textContent = data.percent + '%';

                        if (data.finished) {
                          notifyText.textContent = 'Upload file successfully...';
                            webcrumbs.innerHTML = DOMUploadSuccess;
                        } else if (data.failed) {
                            notifyText.textContent = 'File upload failed. Please try again.';
                            progressBar.style.backgroundColor = 'red';
                        } else {
                            setTimeout(checkProgress, 1000);
                        }
                    })
                    .catch(error => {
                        notifyText.textContent = 'Error checking progress';
                        progressBar.style.backgroundColor = 'red';
                        console.error('Error checking progress:', error);
                    });
            }

            checkProgress();
        });
    </script>
</body>

</html>
