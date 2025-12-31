
wrk.method = "POST"
wrk.headers["Content-Type"] = "application/json"

-- -- 每个线程启动时执行一次
-- function setup(thread)
--     -- 让每个线程的随机数种子不同
--     local seed = socket.gettime() * 1000000 + thread:getid()
--     math.randomseed(seed)
-- end

request = function()
    math.randomseed(os.clock() * 1000000 + math.random(1, 999999))
    local body = string.format('{"product_id":1001, "user_id":%d, "quantity": 1}', math.random(1, 100000))
    print(body)
    return wrk.format(nil, "/api/v1/product/add", nil, body)
end


-- 响应回调，打印返回内容
response = function(status, headers, body)
    print("Status:", status)
    print("Body:", body)
end