WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-19 19:47:40

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: nginx

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.jpg
- destination: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.webp
- log-call-arguments: true
- converters: (array of 3 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- default-quality: 70
- encoding: "auto"
- max-quality: 80
- metadata: "none"
- near-lossless: 60
- quality: "auto"
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.jpg
- destination: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.webp
- default-quality: 70
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- max-quality: 80
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: "auto"
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
"cwebp" ?? ???????? ?????????? ??? ???????
????????, ??????????? ?????????? ??? ???????? ??????.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -version 2>&1. Result: version: *1.0.3*
Binaries ordered by version number.
- D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Quality of source could not be established (Imagick or GraphicsMagick is required) - Using default instead (70).
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 70 -alpha_q "85" -m 6 -low_memory "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.jpg" -o "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.webp.lossy.webp'
File:      D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.jpg
Dimension: 1080 x 1702
Output:    151262 bytes Y-U-V-All-PSNR 39.36 42.76 42.81   40.23 dB
           (0.66 bpp)
block count:  intra4:       5239  (72.00%)
              intra16:      2037  (28.00%)
              skipped:       370  (5.09%)
bytes used:  header:            254  (0.2%)
             mode-partition:  23518  (15.5%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   91856 |    2312 |    1330 |     614 |   96112  (63.5%)
 intra16-coeffs:  |    3902 |    1300 |    1062 |    1436 |    7700  (5.1%)
  chroma coeffs:  |   20727 |    1124 |     911 |     889 |   23651  (15.6%)
    macroblocks:  |      70%|       8%|       6%|      16%|    7276
      quantizer:  |      33 |      25 |      17 |      16 |
   filter level:  |      28 |      27 |      16 |      19 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |  116485 |    4736 |    3303 |    2939 |  127463  (84.3%)

Success
Reduction: 35% (went from 227 kb to 148 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: *Exec failed* (return code: 1)

*Output:* 
"cwebp" ?? ???????? ?????????? ??? ???????
????????, ??????????? ?????????? ??? ???????? ??????.

Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 0 binaries
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (WINNT)... We do.
Found 1 binaries: 
- D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe
Detecting versions of the cwebp binaries found
- Executing: D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -version 2>&1. Result: version: *1.0.3*
Binaries ordered by version number.
- D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Trying to convert by executing the following command:
D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 70 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.jpg" -o "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.webp.lossless.webp'
File:      D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-01@2x.jpg
Dimension: 1080 x 1702
Output:    1044528 bytes (4.55 bpp)
Lossless-ARGB compressed size: 1044528 bytes
  * Header size: 7654 bytes, image data size: 1036849
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=4 cache=10

Success
Reduction: -350% (went from 227 kb to 1020 kb)

Picking lossy
cwebp succeeded :)

Converted image in 7383 ms, reducing file size with 35% (went from 227 kb to 148 kb)
