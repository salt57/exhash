<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Extensible Hashing</title>
        
    </head>
    <body>
        <table style="width:100%;">
            <tr>
                <td>Maximum Global Depth Value, k = <input type="text" id="k" required="true"></td>
                <td>Number of Records in Each Bucket = <input type="text" id="rec" required="true"></td>
                <td><input type="button" id="st" onclick="start();" value="Start"></td>
                <td><input type="button" id="clr" onclick="clearme();" value="Clear" disabled></td>
            </tr>
        </table>
        <div id="showme" style="display:none;">
            <table style="width:100%;">
                <tr>
                    <td>Search Key value = <input type="text" id="skey" required="true"></td>
                    <td>Corresponding Binary Form = <span id="inconsider" style="color:red;"></span> <span id="tmpinconsider" style="color:green;"></span> <span id="noconsider" style="color:gray;"></span> </td>
                    <td><input type="button" id="insert" onclick="insert();" value="Insert >> "></td>
                    <td><input type="button" id="restart" onclick="reset();" value="Restart >> "></td>
                </tr>
            </table>
            
            <canvas id='drawingboard'></canvas>
        </div>
        
        
        
        <div style="display:none;" id="components"></div>
        <script src="fabric.js"></script>
        <script src="wholejs.js"></script>
    </body>
</html>
