use field_nation;
SELECT user.user_id,first_name,last_name,avg(correct) as 'average correct answer',time_taken
FROM user
left join test_result
on user.user_id = test_result.user_id
group by user_id order by time_taken desc;
