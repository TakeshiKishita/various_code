try:
	while True:
		n = int(input())
		count = 0
		coins = [500,100,50,10,5,1]
		def count_c(coins,kingaku):
			global count
			coins.sort(reverse=True)
			for num in range((kingaku//coins[0])+1):
				if kingaku < coins[0]*num:
					break
				elif len(coins) == 1:
					if kingaku%coins[0] == 0:
						count+=1
						break
					else:
						break
				elif kingaku == coins[0]*num:
					count+=1
					break
				else:
					dif = kingaku - coins[0]*num
					count_c(coins[1:], dif)
			return count
		print(count_c(coins,n))
except EOFError:
	pass