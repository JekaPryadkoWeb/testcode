WebP Express 0.18.2. Conversion triggered using bulk conversion, 2020-10-19 19:47:02

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.9
- Server software: nginx

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.jpg
- destination: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.webp
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
- source: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.jpg
- destination: D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.webp
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
Quality of source is 82. This is higher than max-quality, so using max-quality instead (80)
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 80 -alpha_q "85" -m 6 -low_memory "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.jpg" -o "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.webp.lossy.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.webp.lossy.webp'
File:      D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.jpg
Dimension: 150 x 150
Output:    7248 bytes Y-U-V-All-PSNR 39.08 43.56 43.12   40.10 dB
           (2.58 bpp)
block count:  intra4:         96  (96.00%)
              intra16:         4  (4.00%)
              skipped:         0  (0.00%)
bytes used:  header:            175  (2.4%)
             mode-partition:    511  (7.1%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    5715 |       0 |       4 |       9 |    5728  (79.0%)
 intra16-coeffs:  |      27 |       0 |       0 |      13 |      40  (0.6%)
  chroma coeffs:  |     757 |       0 |       3 |       8 |     768  (10.6%)
    macroblocks:  |      94%|       0%|       1%|       5%|     100
      quantizer:  |      20 |      14 |      11 |      11 |
   filter level:  |       7 |       3 |       2 |       8 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    6499 |       0 |       7 |      30 |    6536  (90.2%)

Success
Reduction: 15% (went from 8555 bytes to 7248 bytes)

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
D:\OSPanel\domains\onzo\wp-content\plugins\webp-express\vendor\rosell-dk\webp-convert\src\Convert\Converters\Binaries\cwebp-103-windows-x64.exe -metadata none -q 80 -alpha_q "85" -near_lossless 60 -m 6 -low_memory "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.jpg" -o "D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.webp.lossless.webp" 2>&1 2>&1

*Output:* 
Saving file 'D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.webp.lossless.webp'
File:      D:\OSPanel\domains\onzo/wp-content/uploads/2020/10/about-pic@2x-150x150.jpg
Dimension: 150 x 150
Output:    22738 bytes (8.08 bpp)
Lossless-ARGB compressed size: 22738 bytes
  * Header size: 1506 bytes, image data size: 21206
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=2 transform=2 cache=0

Success
Reduction: -166% (went from 8555 bytes to 22738 bytes)

Picking lossy
cwebp succeeded :)

Converted image in 417 ms, reducing file size with 15% (went from 8555 bytes to 7248 bytes)
