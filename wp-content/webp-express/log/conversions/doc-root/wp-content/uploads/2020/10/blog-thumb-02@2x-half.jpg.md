WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-19 19:58:44

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: nginx

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.jpg
- destination: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.webp
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
- source: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.jpg
- destination: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.webp
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
Quality set to same as source: 80
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 80 -alpha_q "85" -m 6 -low_memory "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.jpg" -o "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.webp.lossy.webp'
File:      D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.jpg
Dimension: 540 x 851
Output:    38392 bytes Y-U-V-All-PSNR 41.40 44.65 45.23   42.29 dB
           (0.67 bpp)
block count:  intra4:       1397  (76.09%)
              intra16:       439  (23.91%)
              skipped:        15  (0.82%)
bytes used:  header:            175  (0.5%)
             mode-partition:   5912  (15.4%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   21811 |     229 |     401 |     726 |   23167  (60.3%)
 intra16-coeffs:  |     348 |     119 |     448 |     830 |    1745  (4.5%)
  chroma coeffs:  |    5977 |     193 |     418 |     779 |    7367  (19.2%)
    macroblocks:  |      58%|       3%|      11%|      28%|    1836
      quantizer:  |      25 |      19 |      12 |      11 |
   filter level:  |      11 |       8 |      24 |       8 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   28136 |     541 |    1267 |    2335 |   32279  (84.1%)

Success
Reduction: 44% (went from 67 kb to 37 kb)

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
D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 80 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.jpg" -o "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.webp.lossless.webp'
File:      D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/blog-thumb-02@2x-half.jpg
Dimension: 540 x 851
Output:    256156 bytes (4.46 bpp)
Lossless-ARGB compressed size: 256156 bytes
  * Header size: 3545 bytes, image data size: 252586
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=4 cache=10

Success
Reduction: -275% (went from 67 kb to 250 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1154 ms, reducing file size with 44% (went from 67 kb to 37 kb)
