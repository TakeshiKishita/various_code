// 盤面生成アルゴリズム
// sz - 1辺の長さ
// h - 最大の厚さ
var genBoard = function(sz, h) {
    // 盤面初期化
    var arr = [];
    for (var i = 0; i < sz * sz; i ++) {
        arr[i] = 1;
    }

    // 盤面改変
    var r = 1, r0, r1, r2, r3, r4;
    var max = sz < 100 ? sz : 100;
    for (var i = 0; i < max; i ++) {
        r0 = r = (r % 10009) * 99991;
        r1 = r = (r % 10009) * 99991;
        r2 = r = (r % 10009) * 99991;
        r3 = r = (r % 10009) * 99991;
        r4 = r = (r % 10009) * 99991;

        var sqrX = r0 % sz;
        var sqrY = r1 % sz;
        var sqrW = r2 % (sz - sqrX) % 100;
        var sqrH = r3 % (sz - sqrY) % 100;
        var brdH = (r4 % h) + 1;

        for (var x = sqrX; x < sqrX + sqrW; x ++) {
            for (var y = sqrY; y < sqrY + sqrH; y ++) {
                arr[x + y * sz] = brdH;
            }
        }
    }
    return arr;
};