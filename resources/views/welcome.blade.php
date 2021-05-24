<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .container {
                padding: 50px;
            }
            .spay-btn {
                cursor: pointer;
                padding: 10px;
            }
        </style>
    </head>
    
    <body>
            <div class="container">
                <button class="spay-btn" type="button" onclick="window.location='sarawaktest://YourAppScheme?MDAwMDY0xkpY0aJON7+MISUVWVVXYvb2j/+t0GOtoapdnTFSB141AkxVnku28IqFXnIasZGCyadXk6Xnr5cbYZP6gv28WBC+2xatFF0Yxbz2NxiRLS+IGGScNuZ5b8vHgRNNpDI8Rf+NxhMjO9al9uG8KyOhZxqrA2a0cGZ+GPs1w9qw/S8aeUNasSfsbqzDq4Ah53mI3+FXPJlQ10Cs8Zc7mntD9WBU/PrXcl5xMu9omPJ3y3FO3SZrACZoSuGOwg9sd24kaPYLSMHZdZQxdg4aNT8IM0gMXdO7QO6+4L+2bAZehj9nsDAHicMOmbBEd6YhBMHiKG59G8HfaKK9ZBcqchns5UIPvntd303Qe4Ztr61kUm3BzM4aqKtG5Pvc3/EPUbbXdJvDPSTnK/EAIfN1Hu4Xj9JpDiHEK9N5W1JiNRJf6b3vkG+mxjHQSuz1/RSKIcWoIcJo5+RHQg5OaW3Oa5C5bjyuY4UqwQUr/acYA9kqtCIsebIZ+Dm2Fq4P/+2RHcEG2X1VQsvtT90LXLdkJ02SsKJQTB303n+YkrRty/i8PMcwTxucLVpt8fQxCGZ4mEPBVKNzNfHvrwcefS4+U1SQsscqZ2UHao6EOf0CH0uglFB6VKI9jFHLJ2OqCITSIMa1hd/XZ7Q5sga+qc49Pif8hiy2NYI0N9jFCPwHeahk9qjGeTWR0CVvb5DXLgOEApty+IcQhbSSF3usnTrAqDCEV1sH6BGAz5FmGi4CvqAaHiPkJM56Qke6rMEa7hWRSPFaZrFV7+1dr0ztjgSfhhCZ1/4IJaLu/qzucLn6jKd4F8e/sy0PdkGev4lJgXkEefaCmRdTwXuprtusnRE1j0BsfmUoq3pjwoD1GIBIeZajenuifLnrwDXD33lmraikhCwPYh0IJEbUaovXfpDjFG5x4bNvT6A/vsd3wmNt++QVgNPf3B2DGpHgS65IFJjA4cI9bcq4DAmpWcNydLgAeaBVpZmUwtm7I58GKceA+tOwuMEQozNx9W6dMknmJUdeSpplatMlj4agLS3b07Gh0KmTPOJpfJ6vEczLr0GAnF4NrqZg3sk4ZiQO6xP8NjertwWViWlqtKg4sa+CFgsIESL8FMTC+uyqDvuoESPvw4ZwcZpK7vOpH3JgsiAtUcSZmNZqgi1F+fH8mLgGvn1ZZqhB/9Hf0YpM8AWO4BKUfSs6vt9VWVpRTwf4UbABKUSrF5sJl+SU+XY1nhCgiq1Q2xPMi3QJv70xcYYBPKLJX98hm3+RPdp7DvWDv/Fz+lrKjrvOPDF/6FfK8GPh+UhV0GIVzQ=='">Sarawak Pay</button>               
            </div>
    </body>
</html>
