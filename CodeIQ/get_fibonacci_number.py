class Fibonacci:
    nums = {}
    fib_16 = [1,1,2,3,5,8,13,5,2,7,9,0,9,9,2,11,13,8,5,13,2,15,1,0]
    def __init__(self):
        self.nums[1] = 1
        self.nums[2] = 1

    def calc(self, n):
        if n not in self.nums:
            self.nums[n] = self.calc(n - 1) + self.calc(n - 2)
        return self.nums[n]

    def room(self, n):
        return self.fib_16[(n-1)%len(self.fib_16)]

try:
    while True:
        f = Fibonacci()
        print(f.room(int(input())))
except EOFError:
    pass