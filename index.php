<!DOCTYPE html>
<html>
    <head>
        <title>Formulario</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css.css">
        <?php header('Content-Type: text/html; charset=ISO-8859-1'); ?>
		<?php /*require 'conexion.php'; */?>
    </head>
    <body>
    <!--------------------------------------ASIDE------------------------------------------>
		<a id="wrapper" class="ancre"></a>
    	<a id="close" class="ancre"></a>
  		<a href="#wrapper" id="hamburger"><div></div></a>
		<a href="#close" id="close"></a>
		<div id="wrapper">
    		<div id="image" style="text-align: center;">
    			<a href="."><img src="logo.png"></a>
    		</div>
    		<div id="right-ul">
      			<ul>
        			<li><a href="#home" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFpklEQVRYR7VXTVIbZxDtlhDlXeQTWNmlKhERJ7A4AeIEDBWoys6IC1hcgBFrSCGfAOUEyCdAgWQNnAC8c1ma6bzXM5806IcfpzIbwfz16+73Xveo/A/H7z/FtaQiH02kpirNPMQt/u+dXrUPiyH1v8T/rR63EOBMTdon1+1eeNfuWtzBiz+K2Wecq4rKQEwaovoevzvFe78bwN7a0QcR7U4SKLw4A2D7xuspgqtF47LuVxLrA8QPJ1ft9fDcdwHYq8dnyCpChn+VR9pKKv7iX0N2oQKWyoaqdcy0w18AvsdzLQCYxH0VgKgRVyupXAB9w8z+RFZRb9h+8POJIdMMhCl6b9ZEsKGlCnC2j2togzVVdZPATv9uD1iFFwNwYq3KeR780+n1QVTkzyMQIrcI9sVbpNaQRHtWAgjRdyTlqwHs/Rw3rCwXQFudJRG40EWvtzWRjVFFbguV6KP/h1K2yEyquKcPXoC0ui2JrJ/80x6+qALLgjPjlUTOg8wgsYeVb7L+9Q1+E+ux1ADbA4hjZE9V1FCBm1dxYFlwnpcy22Fv0eMWZPiATNFTvRmVZIO82K0fEcQ2QYzK0g4KYAtfRMKlwetxhCzOTOxOUo0CmegJJZVzlHtwet3eYHlnQaykNiTYk+uDxpMyXBoc/UaWHyi/UVmbb75KdVyxTiAk5OngmDXMZmcGRB8V+xEKqZ5eHaAd2TGnAu9tKjdFwmUMl5jah/w+8cFHQcUiAGrNln4OBJ6jfPFsayGAos4D22e1r6nCUHCA3aOSdhjUM4fzsSrPgSBZqZiFKtitxxfO6txWi2RDyB4DVlI4GnTtIErWDZnPgtirHw1zY5prRxHEpAXTAZINiykPDLzRLqZYh5ovf9MurBfyUhiLg+DfETNyIqISsOeIcix4wjwnYFZQzLoDmDLY3OGKwcV0P7NWPFCWPjTeXRlpZ7xqA0006yUqAToxSA7c+rw2Y0zzlQCflBY7XpVLsIPkiPKeX+K1NToWex2sVEUHAQT/hs12CZDnXOf0AWp+JDUrAwSGUH5/MKY+QG4FdYDUTd1biy/BzLvAzCAlsp1BPCvKL/fzACIzFqGdRmhRzEXD7zNwCC1JS1KjL5CcJ1cHx9l7ATjRZiAgk1WWm6Uiex0ZZznKPQlsOgx/c7KBpDW2ZFySLnuM4Pfw+LfI/pKyy5YU6zL7TOhepXNWhvIGUNw7PeZ8ICfj5sRSAQjtqbE9mbMJKgbycPRmB13t1lsmMuRzbIGTE6A4C3Kbvuc9RRt2fEU0/LvQgsm8DxLj8kHnc48XjFvzFmQH1y2e48BJZIdV9aGECpVHcuikxTh+HkA2aC5Tky2UNppwg+dzyWWsF4GnN0N8cAmFwfhFtQBmM5iNj2tDRQAQS8pdcQ4srIBXYe3ogdrHS/pUAUjkmg9LhykWC8yDWQCcEalw/YJsBYYFhTh/JjPCPhefWQ6gfsT1ypfHzA0fg8inGohaqACfyXrRI0mR9bCk4AFAoAUDbFM3VNbsJrVwJZu4otgxs88dDprOvB4268HmACgIiYAp/R7tQxVBWlfEhQ8ytIiOWuTdMgD7uBCHnroC1mKe23aWu+ksAJBXgHtgsGy06wLt2uJcIK/+uG77s+FYCCAfQnDHsOHKO2o8XzCw+aLIyHJRC3iOPcfC0uLWTOt2UnKfLOyCTwLIiIgCmLh1emCk5SCySoDyj+d6aAuHVHEwcVrm69j7WQkuJaEDcCJy/5d+bkLYavWeIHgNpR0U+5mBpEsqhhSA59ORXOB7MnedkvbZCvCFXjp898FgIo5Y/wKiu/lqNQMg/x5EZbh6Q/vGSj3gviZ+O4sI+GQFpkqY2GyRO1L8uOCF3V/ippb8q2nBYV+4PYcF9lkS8gYf0xVIiOTB4TsBrJRmg2yG/NgMAyy80PfJsc+GybEoaPH6v8R2I3rzwwRBAAAAAElFTkSuQmCC"/>Home</a></li>
        			<li><a href="#money" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEfUlEQVRYR7VXXU7jVhQ+x4Z5JV0B4W2kaSCsoMkKoCsYo0mkeZs4G6i7gTi8VYIRmR1kB4QVNJBW6lszK2jmFYjPfOfa13aCEzsjagmQTe71ud/fOWHa4eo0wpBZLkhoapcJ0ZyY5+Ze6Bdiurt+8IOq23LVD3YboSckretZ39u0pvsubJIjw6tZv1V13x0KGEyeXD4fTf3Fts07jcEYRZ6/fgHHIQCQljCb07HQV2Gq41kdd4c4ySJiGTtEp1cP/d7rF9AYTLZB6zXD2t4zNaGR4H+joMrG3ZJC15GprIHO8QBK55syaFmkXaVQu0/lAvIn6/wcrqrcoRZFNAEF8+Ub6e2sAeVvfykn8HBTiGuFpxQ52mZBXfPxbVh/fkPezjmgJ4J4hhFxsHRpkreaOS1OCGjPRdioG+qvMYpdKdS4Qe3B8x8qAC9pYuFwY8gcD4Zl0Npif6wApjNQkIWMgFc9kPqb6IueuGzjznEYIB/mVzN/VCbWFRFaUV3/5U+KFhpu9yUA9tnGKry1CzS1QFOwaZ+ivY0LTM6j8qKFVqBoOhdlIuyCJol4vHMBCh3qUPiNA5ikhs7WROzGiMBi7NCNRHShgkxPot0vw3KC03juI7X/+Mef70YBCnh2aLit0aDJjEoR2DEFE42BAkCHm3+RAUpJlgMisBofmNOgzxskmD7BiD/pI9CyYLQlbUKfH/pfbFgpbRYBky8bLiTmndGAUlBB4f/ho5d7jzRSiO0a04Qi6qErohHBAeiESa4EKYWFBQgCq19PRJh1OlX8cl8OV9ewh/u7vL0sanDGN31uhxGdGdwltfafaLpNC7pei40RAL/pWJV7s3ra9nzLv75IHNGFdTuOWfTiIug3rLm3SBUfyHDqgdLLUgp0wtl74p49jZ14bOis29c4SrWjDoqy2fEFCywe9g0SBMJbWE85yyyWrEC4/AqxpLmvBTy77Bneca1rx6Dg0p+wbHtbHlgNvdDAeqXrA0YqMB3KFMiI/Ku//XRK1mddjG+VCzBJF2GMgiA28PV70YChulEdwJ7m5flGlQwvau3UjhrT9nDqDu2uiiybPgA+VnI+L8SCGS8dSJCKSkE+pGzfQD5ghtzclCyyDC56AHOxYrF4vj9wn/irTjjuIw9TEers4MgJ0ucefzEj0C3837YIqL0i4Qmm4zNE1agoAiJM0w4xJif/VAsI7IeM7fCTQRUPHtob7AuS4AFiCB5QgCFm+Hnmj42dcZhU+Qk6RQUYnTQG05iCrICFvhwvPMEXgLmTLwSdMA+pUqAK1y6qyMUdk0Lsa8KqymCSpyDQjM9bxvC4B4HZy45kzCMEzDifcB8a4TkQ8jjiwLohdgq9NxQkcyZEN1HocRCzr3ZOUHCUiJDOsImBMX/BZ1Axt/C/U+jB0//p0GmCJm7faEg8thTYtbEQ6eZ65rf1mf3SkqN6Ia6M015gONGIxbBpPoT5EL9roGSqAt1lwLAvUYhht1u0+cv1Np//olv5e8E6OmX3tkuaMc2gFbd1oKkJttA01cK+Ayl7uM1ihFn/AAAAAElFTkSuQmCC"/>My cash</a></li>
        			<li><a href="#trans" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAEE0lEQVRYR8VXXW7TQBCeSdo+5waYNyRIZU5AjpAjRKKVeEx6gpygziNSi8gRwg3SG5gWJB7DCfBzk3j5vrHXdZ0fNlDAUuTYnt35duabb3ZV/vOl+/yfd5NBrs61nCyadk6kI6qxc/JZnWTacn3aONFMxXX83d452ML+aKnD999Gj+baC+DsNBljdKQqmQfAiTFh2soLUE6lw59/lpbE7aXMV0cSEVjeksi+4X0ukn24G83qi9kfgdPLict1xsG6ljnvcG6OOXnlnNHglUtKh/477fkOC4hoi8hEV7cXw3AA3cvUOR1WE9ApAPCZq7HQ438VHToBUFs1QJkNvwOEAVCJr29H42AARQrkDQakCFXEvOOe2d07du77Fn5YylT0B0B8ouOje5muT9zwoAj4id+9SCLmlM+4p9N0VHGi6bz+zAWQLwYGgMHn/tXdRS84AvsmD/n2tpv0uXqkYF6AcON/CuDsVdKz8lzrtOAFUhASAYa8Wa8hK27aEICRr6yYIADnL5NYWm7aXmr/T0FYBHzFkLTOxdd3F4O9HDjrXs4gNtOWul6TsYdGgQAeacevypCsRbgWZf3GcJihbieHOvb2RQTcOBe1OfbqAPO+PnZTCA9BmMpB7gartg5Dy24bB0hCRHRhc4rr7UzBefdybs4pm775tMRqtqleuyJi/Gm7AfsF8007SyeEq1BQN3aqc+svAlkvBE6EXY/o0FmmNjk1nIMxiFxo3+sklJDg0BQKOK/kFytvryVbnUjf+kJZlq4tPfaGEsCD5hsAajcM8M+aDNtrKCFNNeGMIS/nYZvO2CPMadkrMOeA7VlNrcTyNDPVosNa/zcuIJwwHgdH4TQZ0jki2aMKWlrhA5GZkeBMCZzEXJRayPKCpUBoaH2OLQXMH9NDLjRqeBcXirTWOAUAbEarYzf2Y/yCCgBlznwbxaqjKhJACm6goYBcIOn1l9F8n2P/zYtQkVFry9xLpPXVmw8izVU+AsTzKlxF54KMYjNSu/BuAC23NIVclahhR8TFHS8lRRQm9a2ZFvUv1GyTSrASWyydEwCU41npiGlBKrCvu5fXwVwolLBHTnGbRj8+934BG1syn5JtohGy6qYNo+DJR7Kz1Otp3ACAlKSQzjGNDyHdLnBWliCfVdmWOXcCeIpmVBESROf/baW8FQA4gMrY3MH+Tgo4ZhAnHRAwuvo6su3ZI2I3XzAFBABCsnHYYeNvXpsR4FkA3csqAgcSO+GwJKmPD9S9qTWUBaolpU1zuxUCfGsVkKllG2X5mY77Ew7vpvO4/Har2KLbfi9YI3aWoUkoV6tyU57xFqUxG5M1GDspeRDsG/Z8mEjtBoCeXnXC8lyYOwhT2ageBuIAikOnTxPfh+4b9pIwJG9PafMTjCNp7radHt4AAAAASUVORK5CYII="/>Trans.</a></li>
        			<li><a href="#hist" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAACrElEQVRYR81XzW7aQBCesaOqR/cJ6t4qtUb0CeJHoG9gKSD1Vox6r3uvWI6VIIrzBKVP0OQJoNBKvSV5A3qrRPB0ZmHBcg0Ywk/2AFqz3vnmm2++XRCOPPDI8eFxAAjKyon74egYbGgGaqVmCwj77WEYHxrEDIC6IaIfnWGjcggAZ56qnA/DrsTC6mvlowXfZTK24Nm+S6HZnmDc/hX2NYDaK1UGmwIgKNtjDL78Dm/3xUI2uAYgH8ICWOB3BmF0yOAHA1Dz1AUHu84T+d4ZWBV87wysC74AUFK69rvUQJHgDwbAqn4/tvAy27pFgz8IgJiJhfCVAD6lmdskeCEAVU8pbtY7DtJKt6gGAFRnACPjoHl9vq6tp12wRAP8/CMviAiIATTc9GZVrxnf21i3J+ALEEA8TQjeGotdF9j8ngtATseTCcUI2CUEhxc7OIGusU9t3wiu9LU4KVkU8dxni/XNmo0A1LzmFSF2heZ58AQj2cwc1ZIxUx3IxkJ1e9CoGxft/Ayv0gdM0eBzDWgAhBESjMCi1tjGilG2ZChAZnZd1msS6JtMDcBt7xTT45gB8LFwA0h/TGYmi3cvlSsHlHzfP4EevzBqD8IX2SwFoDCxSfYLBkqqx2q+zCo9TbEpDT8T1etSaPAzhrZmgPs2IKQIEgzyMshubBgxAHZWAtFAHgCToQmYpdrMs+vySiFgn/4FJ33nmGtgGYBswLM3n5+f9z7c5Wlk3WXG3L6IgLVCLS7lt6kPzExFlM+CPF0pJIQy3570dUoPniesC4vQZ8+41Y8IXNaUm9pnev0SrwB+3wyia2S3qyNRhX2AUf0/EMghwPwreyKZLMa6LhC9MeALcVbkkouRzZ1wl0fxMgZ1K5+AmwaqAWzbQitLVfDHx/HXrCDYvSw7OgP/AAm1vhAZL7QeAAAAAElFTkSuQmCC"/>History</a></li>
        			<li><a href="#conf" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAGbElEQVRYR72XQVIbVxCG+2mQy7uIE1jsUpUA8gmQTwA+gUUFqrJD4gKWLsBIu1SBK/IJgBMgTiAFkqrsJE5gsXNZ0rx8/5sZSkiCmCyiBcyM3nT/3f333y1n/+FzsHmya85VnLeyOat6s9K0YBvdQWP8UnPupS/oPAAucFxJ33Vd/hz9vwC24ibIP9rM3lrkawCoeXPNs5tG+6UBrczA4U9xxTsrnf3Z6K0yeLh1giN3NCnY+uuvVpoVPRlxP3D/dr4Mh5sxwGzbvF0+ZWsJQK0Sl9YSG/LF2Ce2v/hiABfZFcBa5n1lGrm6QBYTPyILbbLQ1P2vP8bl6SvrO+//ULm8d32AtBbtLQE42IyvePjZm99zIphedBYykZGu5r3/TMQD6t5dm/m2eXhQsArvxTjZn0R2UUwCyEr0zTa+vrYxAAHmjsx85/TmOIAONudTHKIr+CaOR9E315698uGgh+0cLFGWskinKBWhvpexAzihYxzccM59eLAJGB7XEjLz6bZxkQbn3entcXUJgJxbZOeJt8Yssp4iW5u4Jmms8dIXHHVUHkVCqr8AopUDpgy14gRwBbIBQACP0vC8yHnB+3vcvOH/Os6z7lnIQDA+8z3v3BtL7P10zQYCIQNpqnwNQPXf/m6MftmM9woGEO/qa1MbTYtkLXHtaGZjERIb5wKo98hOndLtkD3KafvKxHzWH5UgS+uAZI5yI2I8jkivXRJh13nXPL1tdANZZ9yLGYm1QukAq/oHXhDxNLL36ooAAn6c3jSWOLeChCcYtTJO4YJvRhNXmxWNmvk6tWwSeZ2s9MMZeJELEhlSadaBsw2IfTqpRqQf3cze0TV7dEN1vvYrSfiQsgxtyEjRd3FyDikv837nXBnCqb16OB1jfI+u2Ob5AFCXuld5ADP2ERrh3VAdpY5QCZdKcLh5sjOJ3B/6ojiz3xUVh9/lhwPL6Xmc7IjFPnF7i/2cpzkY99blz1vK0I8m1sqIXOfVK2VnXqxc2kIepkO+tJfuLHE1SlsH9ZXYHzKjFnIYnbnq6V+NwXwU+XWukNn9CND3IrXKk3h3V3Bkkw6CjBDR985ujy8d0ZNGG3GjmqWs5U051jWXVZC3XcGuONd4Tu/TNjUc+EsJFeaOciXE8RBlbbgC5TE4oYAB4g63Yq+hAovraiVFd/BzXFUPS2bntH5b2v9vIzcEBB8Aui47OBQHzlWSkA10Rl2kOYGPdgCQtwdjFsK5oXo4aHkxyGwbma1q+q1qo8VSCIC4oqAUTKYvpJwMOLsju+JCHefMBysJQJ+USK3GYjqEIT32AQP7k6KNJE4Y5IhVvgvAVjykbHdE2xOlmBcdZS3TE3UK5iTpgXAtp+VCPZ21kXSfqGklUkeLxcqGMhM0HiVT+lYRMPAnpDxwpaV5EeQdedYsKDj2B4LAwbVmimYLAWuApZ9sDEuxOOg7k4JrBmmGtWsT25++8j2p3uLMX+iAXd5dJ4ieSqdWzYjZ13M5XKkD8xE9tBIMVc9mw0cTrhPql7E51wE5iBK/C7i2ohKzMyWk1raDplwrKDrg3aqlZEmK03lgQ6VRipbKryQ36Lvqi6+geipXL6unlPEa/agnBStLrnWdDSeVrLQ4BfOgV69kas1sscgHDs46cLGt1UsjWzKrVpWwEOWdDGpBEeHmJivtZ/ciNQRGGZc/SwCyvUDr0wPhgiBpsKBo/N/QZkOGtIS20nEbMkUJEBnU89PN8edAypS8O1yWv7sECIREYz0sFuarWkpEnHQXzAYLK5tKonVNBJWzMLRUIrNrSbumqWqezwgA6zeDuuPR5vx4JdO26xm9TDm0u8eWM5AYac5jdEhd79VWUjqMcdZvUBII6JsP0q0uYqEJs4TyaBihJ5Uwxmm/s5vj8nwhHgFItd92FZVeUkohGULFbiAiZsQDzB3PNXIlYoEbLCr90DXpNGUFSz9Z5IpaZezkW/OTJAy7vLNYmh0OiXhIZ9h02fu0+QSpzaIMIzpfOlINudd57YUCFlY8nmFv9F0LiXyGnU+jU6sZxpZ+G2yesHi4L1q5aLVqlgEISu2du8jrnLe0AKwSoRDffD0Wr2VgUbl0JgwcrelsQCKp9n61a56ZecAir7RhcRl9sgTPAcq/y9srLBYu7H5wQLJNR7AHvOQ34rMZeA5MxhUpoAYLw4yfX2gB3Og99Ttwlb1/AFQi9q6/Yj/2AAAAAElFTkSuQmCC"/>Config</a></li>
        			<li><a href="#" style="font-size: 1.5em;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAFPUlEQVRYR71XQXIaVxDtnkGq7IxOYLLLIrLQCYJPEPkERhW5KjsDFzC6gBh2qZJcGp1A+ATCJwBLSVV2Qicw2rkMTPu9nhnAWEgjp5ypQhrgz+/Xr1+//mi92imXErlWkbLgMpEx/gx575dKP781sVFgMjLV2vz7lRs164cTvfnr3+Zo3Zrlz/XVdqeOjfcAoGKmjfmXgVRx76Cw6dqAdwThM+Pjq1ahZ/Rg+yhmcISJESnCw2+OL1vdIujvWnPwa6emgXSOL5u7RfYAA0f9RDQKmK1aFfRXRfWJJdI8+bs5p7/IZlyTAbgAAOT18KWvnnUM15mYxqWpjKYb1gYbT1VtFyUZANDhY4B8H4BEnnutVSqTUHrhTGoqVvfSqO6YQYgFgXwfADCgiUbH/zSHB886DQQczULpbyRkQ+opkfoEIHoAuB8Pm+N15K4CoMjDifTXdUVaAjKQql5OLpvRn790KtNNqStbDi+UIwITLNWNs5JonWDXiVACi08uW5UcjJh9QAIDADlcBeIA0P3d8LNGyLpsgTVM5eLtZeuMG0CYdQSHT9gWGMB7ALlHoPSVjZnsHV814wUA2ceeFYB/g2DtaSDdnEUAOBonpk5zoFZLRAYBnAagEFjOJ4GecUNTa6voR2wABuRFLsw0oO3gc3SROov5BQYreO65mrbZYZZoL2OTXbbPPbwNEWhoomMgi9AJaEODIek1Pr9NTQj3iXSTAFmwHChBDgCaaWPN3iIqAMJJPWN3Tc+858EDX3eN18/Y83Vi8sIBIOGe1xqOuEw/grUBbIDs3vO7rCue5ui97wEA/yhKd0CsAwBd6COBrYcGt9URAI3BMNewrEPs9zIFAIrcAyg8sTLAcJOIWf6x3dkLxL0hYouWEht+y4DsgKFD6gfFG+N5t/A0iFVQxrZ3FEwOyYxKE23PNrGPSLwoASiaB4QWlhd/+knG3IDAVPV3ds3XJQAAXJgpMaISBJMY01fILL65nYZax9BDZyH77JqEWvNZAKQjnaFOoeyVPkvMgFjcyIZQGSU6p3KpD/j8xTIAZwhizQDcsO55ADzXp/KBLAa4LQcxsxjAaui6KlsyBZAquI8gMQNzAwpyY4IMAjcj1E0qicppgKG1DGAuvjU33uaGNqSG4KpgY0tmWst9JNWAnwE0ghnVvHRkA4GBFEOl1XWhmYF+ik1f3wcgNzEYGoFLOmsERgZHNXtPFpad9CsNEIC3TtoN5wB1CwHCmhWthuCBO+Jv9wHIzWcSyBYDgeGeixFJ3eWeCwawCEiHyLKadUIZtMMT5BQtBBe0KtTbmG3K9X0A3JgS+Vi0TLkP9EkZBeVeIHQsAKEJ4WyA4DAzBSO2u9oFd5U+ny9FxvhchLBZTrqe05bWHD2rVCyB0MFSs+F4XmrD/w4gdTJXPfuU92jFXt6K3wApCKDwiSjz8hp7lmXITskN1wHMaXFK4gFZOTdOi4iwMAAeGNCbHD7wfNY6HcU5EDLAFs2ARA9p4NEnIn8AQ8dPxRgSHEysOQ+qb6+avVTVPpTG8Pu+O+Hqb4clIdCG8bZamAE+y16l6cAe3+FQGlGQYKKM7GlMpydXrXcZUPqAi3BakqGP7vzKTIxv2c4E/5BLuunli/z3Qbp5049nad+3/ZQM7+YEdDMKZVA0u0cBcCZwIIX40IJ6jizOeDDJmZltGAaKDvC+8cMAEIR7ObIGGy99iql8IBs8NbMs1MAPBTAvSXYgzYD00CG3Prb9p1uxXz2PLsFdD6wwgsGCE+//CSAHlQOhIHnmL5JdkTVfAN/Yg55Ir24xAAAAAElFTkSuQmCC"/>Logout</a></li>
      			</ul>
    		</div>
  		</div>
    <!--------------------------------------HEADER------------------------------------------>
		<nav align="right">
            <input style="font-size: 15px;" type="search" id="search" placeholder="Search..." />Welcome <b></b>
  		</nav>
    <!--------------------------------------CONTENT------------------------------------------>
		<div class="contenu">
			<div class="cont">
  				<div id="home">
  					<h3>HOME</h3>
  					<?php
					function eX($amount, $from, $to){
						$url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
						$data = file_get_contents($url);
						preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
						$converted = preg_replace("/[^0-9.]/", "", $converted[1]);
						return round($converted, 3);
					}
					?>
					<p>Today<br>
					<br>1 USD =<b><?php echo eX(1, "USD", "MXN"); ?> MXN</b>
					<br>1 USD =<b><?php echo eX(1, "USD", "EUR"); ?> EUR</b></p>
  				</div>
  				<div id="money">
  					<h3>MY MONEY</h3>
  					<p>Your money is...</p>
  				</div>
  				<div id="trans">
  					<h3>YOUR LAST TRANSFERENCES</h3>
  					<p>This is a table...</p>
  				</div>
  				<div id="hist">
  					<h3>HISTORY</h3>
  					<div style="width: 80%;">
  					<table class="fm-stacked-area" data-fm-y-label="Amount" data-fm-date-format="DD/MM/YYYY" data-fm-value-prefix="$">
						<thead>
							<tr>
								<th>Date</th>
								<th>Up</th>
						        <th>Down</th>
							</tr>
						</thead>
						<tbody>
							<tr>
						        <td>01/01/2014</td>
						        <td>1500</td>
						        <td>6500</td>
							</tr>
							<tr>
        						<td>01/01/2014</td>
        						<td>2700</td>
        						<td>-1100</td>
      						</tr>
    					</tbody>
  					</table>
  					</div>
  				</div>
					<link rel="stylesheet" href="http://factmint.io/stacked-area.css">
					<script async src="http://factmint.io/stacked-area.js"></script>
  				<div id="conf">
  					<h3>CONFIGURATION</h3>
  					<form action="">
						<h3>Personal data</h3>
  						<input type="text" style="width: 34%" name="names" placeholder="Name (s)">
						<input type="text" style="width: 34%" name="lnames" placeholder="Last names">
						<input type="text" style="width: 19%"name="birth" placeholder="Date" onfocus="(this.type='date')" onblur="(this.type='text')"><br>
						<input type="email" style="width: 33%" name="email" placeholder="E-mail">
						<input type="tel" style="width: 27%" name="tel" placeholder="Phone">
						<input type="tel" style="width: 27%" name="cel" placeholder="Celphone"><br>
						<input type="text" style="width: 95%" name="address" placeholder="Address"><br>
						<input type="text" style="width: 47%" name="school" placeholder="School">
						<input type="text" style="width: 45%" name="area" placeholder="Area"><br><br>
						<h3>Account settings</h3>
  						<input type="text" style="width: 30%" name="user" placeholder="User">
						<input type="password" style="width: 28%" name="pass" placeholder="Password">
						<input type="password" style="width: 28%" name="npass" placeholder="New password"><br><br>
						<input type="submit" style="width: 18%; float: right;" name="send" value="Update">
					</form>
  				</div>
  			</div>
		</div>
    <!--------------------------------------FOOTER------------------------------------------>
		<footer>
			<div class="">
	        	<h2>Explore</h2>
	            <ul>
	            	<li><a href="">About Us</a></li>
	            	<li><a href="">Institute</a></li>
	            	<li><a href="">Site Map</a></li>
	            </ul>
			</div>
			<div class="">
	        	<h2>Related Sites</h2>
	            <ul>
	            	<li><a href="">Chase</a></li>
	            </ul>
			</div>
			<div class="">
	        	<h2>Terms & Privacy</h2>
	            <ul>
	            	<li><a href="">Privacy & Security</a></li>
	            </ul>
			</div>
			<div class="">
	        	<h2>Connect With Us</h2>
	            <ul>
	            	<li><a href="">Privacy & Security</a></li>
	            	<li><a href="">Terms & Conditions</a></li>
	            </ul>
			</div>
		</footer>
    </body>
</html>